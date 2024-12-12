<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$path = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', $protocol . '://' . $host . $path);

$databaseDir = __DIR__ . '/../database';
if (!file_exists($databaseDir)) {
    mkdir($databaseDir, 0777, true);
}

define('DB_FILE', $databaseDir . '/electrodomesticos.db');

chmod($databaseDir, 0777);

session_start();