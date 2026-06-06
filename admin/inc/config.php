<?php
ini_set('error_reporting', E_ALL);

date_default_timezone_set('Africa/Johannesburg');

$dbhost = 'localhost';
$dbname = 'fashiony';
$dbuser = 'root';
$dbpass = 'root';

define("BASE_URL", "http://localhost:8888/PHP-MySQL-ecommerce-website-master/");
define("ADMIN_URL", BASE_URL . "admin/");

try {
    $pdo = new PDO("mysql:host={$dbhost};port=8889;dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}