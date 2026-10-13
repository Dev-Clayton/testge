<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$url = 'https://embedtv.lat/api/channels';
$result = [
  'ok' => false,
  'php_version' => PHP_VERSION,
  'curl_available' => function_exists('curl_init'),
  'source' => $url
];
$body = false;
$status = 0;
$contentType = '';

if (function_exists('curl_init')) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CONNECTTIMEOUT => 8,
    CURLOPT_TIMEOUT => 18,
    CURLOPT_USERAGENT => 'MegaCanaisTV/1.0',
    CURLOPT_HTTPHEADER => ['Accept: application/json']
  ]);
  $body = curl_exec($ch);
  $result['curl_error'] = curl_error($ch) ?: null;
  $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $contentType = (string) curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
  curl_close($ch);
}

if (($body === false || $body === null) && ini_get('allow_url_fopen')) {
  $ctx = stream_context_create(['http' => [
    'timeout' => 18,
    'follow_location' => 1,
    'header' => "User-Agent: MegaCanaisTV/1.0\r\nAccept: application/json\r\n",
    'ignore_errors' => true
  ]]);
  $fallback = @file_get_contents($url, false, $ctx);
  if (is_string($fallback)) {
    $body = $fallback;
    foreach ($http_response_header ?? [] as $header) {
      if (preg_match('~^HTTP/\S+\s+(\d{3})~i', $header, $m)) $status = (int) $m[1];
      if (stripos($header, 'Content-Type:') === 0) $contentType = trim(substr($header, 13));
    }
  }
}

$data = is_string($body) ? json_decode($body, true) : null;
$channels = null;
if (is_array($data)) {
  if (isset($data['channels']) && is_array($data['channels'])) $channels = $data['channels'];
  elseif (isset($data['data']) && is_array($data['data'])) $channels = $data['data'];
  elseif (array_is_list($data)) $channels = $data;
}
$result['upstream_http_status'] = $status ?: null;
$result['upstream_content_type'] = $contentType ?: null;
$result['response_received'] = is_string($body);
$result['json_valid'] = is_array($data);
$result['channels_key_present'] = is_array($channels);
$result['channels_count'] = is_array($channels) ? count($channels) : null;
$result['upstream_error'] = (!$status || $status < 200 || $status >= 300) ? 'A fonte externa não respondeu com HTTP 2xx.' : null;
$result['ok'] = $status >= 200 && $status < 300 && is_array($channels) && count($channels) > 0;

http_response_code($result['ok'] ? 200 : 502);
echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
