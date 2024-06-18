<?php
$visitor_ip = $_SERVER['REMOTE_ADDR'];

$file = 'visitors.log';

file_put_contents($file, date('Y-m-d H:i:s') . " - " . $visitor_ip . "\n", FILE_APPEND);

?>