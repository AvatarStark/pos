<?php
$url = "http://localhost/pos/config/sync_Send_Automatic";

$response = file_get_contents($url);

file_put_contents('sync_log.txt', date('Y-m-d H:i:s') . " - " . $response . "\n", FILE_APPEND);
