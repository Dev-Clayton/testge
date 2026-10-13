<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate');
function fetch_events_json($url) {
  $body = false;
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER=>true, CURLOPT_FOLLOWLOCATION=>true, CURLOPT_CONNECTTIMEOUT=>8, CURLOPT_TIMEOUT=>20, CURLOPT_USERAGENT=>'MegaCanaisTV/1.0']);
    $body = curl_exec($ch); $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch);
    if ($status < 200 || $status >= 300) $body = false;
  }
  if ($body === false && ini_get('allow_url_fopen')) {
    $ctx = stream_context_create(['http'=>['timeout'=>20,'follow_location'=>1,'header'=>"User-Agent: MegaCanaisTV/1.0\r\n"]]);
    $body = @file_get_contents($url, false, $ctx);
  }
  $data = is_string($body) ? json_decode($body, true) : null;
  if (is_array($data) && isset($data['events']) && is_array($data['events'])) $data = $data['events'];
  if (is_array($data) && isset($data['data']) && is_array($data['data'])) $data = $data['data'];
  if (!is_array($data) || !array_is_list($data)) { http_response_code(502); echo json_encode(['error'=>'A API não retornou uma lista de eventos válida.']); return; }
  $out=[];
  foreach ($data as $e) {
    if (!is_array($e) || empty($e['id']) || empty($e['title'])) continue;
    $players = is_array($e['players'] ?? null) ? array_values(array_filter($e['players'], fn($u)=>is_string($u) && preg_match('~^https?://~i',$u))) : [];
    if (!$players) continue;
    $out[]=['id'=>$e['id'],'slug'=>$e['slug']??'','title'=>$e['title'],'league'=>$e['league']??[],'teams'=>$e['teams']??[],'time_start'=>$e['time_start']??'','time_end'=>$e['time_end']??'','players'=>$players];
  }
  echo json_encode($out, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
}
fetch_events_json('https://embedtv.lat/api/events');
