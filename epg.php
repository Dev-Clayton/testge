<?php
// Proxy da grade de programação (EPG) com cache de 5 minutos.
header('Content-Type: application/json; charset=utf-8');
$url = 'https://embedtv.lat/api/epg_all';
$cache = sys_get_temp_dir() . '/tvonlinehd_epg.json';
$ttl = 300;

if (is_file($cache) && time() - filemtime($cache) < $ttl) {
  header('Cache-Control: public, max-age=60');
  readfile($cache); exit;
}

$body = false;
if (function_exists('curl_init')) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER=>true, CURLOPT_FOLLOWLOCATION=>true, CURLOPT_CONNECTTIMEOUT=>8, CURLOPT_TIMEOUT=>25, CURLOPT_ENCODING=>'', CURLOPT_USERAGENT=>'TVOnlineHD/1.0']);
  $body = curl_exec($ch); $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch);
  if ($status < 200 || $status >= 300) $body = false;
}
if ($body === false && ini_get('allow_url_fopen')) {
  $ctx = stream_context_create(['http'=>['timeout'=>25,'header'=>"User-Agent: TVOnlineHD/1.0\r\n"]]);
  $body = @file_get_contents($url, false, $ctx);
}
$data = is_string($body) ? json_decode($body, true) : null;

if (!is_array($data)) {
  // Se a API falhar, usa o cache antigo (se existir) em vez de quebrar o player.
  if (is_file($cache)) { readfile($cache); exit; }
  http_response_code(502); echo '[]'; exit;
}
$out = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
@file_put_contents($cache, $out, LOCK_EX);
header('Cache-Control: public, max-age=60');
echo $out;
