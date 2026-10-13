<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate');
function get_json($url) {
  $body=false;
  if (function_exists('curl_init')) { $ch=curl_init($url); curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_CONNECTTIMEOUT=>8,CURLOPT_TIMEOUT=>20,CURLOPT_USERAGENT=>'TVOnlineHD/1.0']); $body=curl_exec($ch); $status=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE); curl_close($ch); if($status<200||$status>=300)$body=false; }
  if($body===false && ini_get('allow_url_fopen')) { $ctx=stream_context_create(['http'=>['timeout'=>20,'follow_location'=>1,'header'=>"User-Agent: TVOnlineHD/1.0\r\n"]]); $body=@file_get_contents($url,false,$ctx); }
  return is_string($body)?json_decode($body,true):null;
}
function normalize_primary($data) {
  if(!is_array($data)||!isset($data['channels'])||!is_array($data['channels'])) return [];
  $out=[]; foreach($data['channels'] as $c) { if(!is_array($c))continue; $id=trim((string)($c['id']??$c['slug']??'')); $url=trim((string)($c['url']??$c['embed_url']??$c['stream_url']??'')); if($id===''||!preg_match('~^https?://~i',$url))continue; $out[$id]=['id'=>$id,'name'=>(string)($c['name']??$c['title']??$id),'url'=>$url,'image'=>(string)($c['image']??$c['logo']??''),'category'=>(string)($c['category']??'Outros'),'categories'=>is_array($c['categories']??null)?$c['categories']:[],'epg'=>is_array($c['epg']??null)?$c['epg']:[],'sources'=>['api1'=>['label'=>'Opção 1 · API principal','url'=>$url]]]; } return $out;
}
function normalize_rei($data) {
  $items=[]; if(is_array($data['data']??null))$items=$data['data']; elseif(is_array($data['channels']??null))$items=$data['channels']; elseif(is_array($data)&&array_is_list($data))$items=$data;
  $out=[]; foreach($items as $c) { if(!is_array($c))continue; $id=trim((string)($c['id']??$c['slug']??'')); $url=trim((string)($c['embed_url']??$c['url']??$c['stream_url']??'')); if($url===''&&is_array($c['embeds']??null))foreach($c['embeds'] as $e){if(is_array($e)&&!empty($e['embed_url'])){$url=trim((string)$e['embed_url']);break;}} if($id===''||!preg_match('~^https?://~i',$url))continue; $out[$id]=['id'=>$id,'name'=>(string)($c['name']??$c['title']??$id),'url'=>$url,'image'=>(string)($c['image']??$c['logo']??$c['logo_url']??''),'category'=>(string)($c['category']??'Outros'),'categories'=>[],'epg'=>is_array($c['epg']??null)?$c['epg']:[],'sources'=>['api2'=>['label'=>'API 2 · Rei dos Canais','url'=>$url]]]; } return $out;
}
// A lista de canais vem somente da API principal (EmbedTV).
$a=normalize_primary(get_json('https://embedtv.lat/api/channels'));
$all=$a;

// A API 2 NÃO é usada para importar uma lista de canais inteira.
// Ela oferece apenas uma fonte alternativa específica para o canal Adult Swim.
$adultId='adultswim';
$adultUrl='https://rdcanais.org/adultswim';
$adultKey=null;
// Associa a fonte alternativa ao Adult Swim, mesmo se o ID vier com hífen ou outra capitalização.
foreach($all as $key=>$channel) {
  $idNorm=strtolower(preg_replace('/[^a-z0-9]/i','',(string)($channel['id']??'')));
  $nameNorm=strtolower(preg_replace('/[^a-z0-9]/i','',(string)($channel['name']??'')));
  if($idNorm==='adultswim' || $nameNorm==='adultswim') { $adultKey=$key; break; }
}
if($adultKey!==null) {
  $all[$adultKey]['sources']['api2']=['label'=>'Opção 2 · Rei dos Canais','url'=>$adultUrl];
} else {
  // Não importa a lista da API 2: inclui somente o canal Adult Swim como fallback.
  $all[$adultId]=[
    'id'=>$adultId,'name'=>'Adult Swim','url'=>$adultUrl,'image'=>'',
    'category'=>'Entretenimento','categories'=>[],'epg'=>[],
    'sources'=>[
      'api2'=>['label'=>'Opção 2 · Rei dos Canais','url'=>$adultUrl]
    ]
  ];
}
if(!$all){http_response_code(502);echo json_encode(['error'=>'A API principal não retornou canais válidos. Verifique a conexão HTTPS da hospedagem.']);exit;}
$catIds=[];$cats=[['id'=>0,'name'=>'Todos']];foreach($all as &$c){$name=$c['category']?:'Outros';if(!isset($catIds[$name])){$catIds[$name]=count($catIds)+1;$cats[]=['id'=>$catIds[$name],'name'=>$name];}if(!$c['categories'])$c['categories']=[$catIds[$name]];}unset($c);
echo json_encode(['channels'=>array_values($all),'categories'=>$cats],JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
