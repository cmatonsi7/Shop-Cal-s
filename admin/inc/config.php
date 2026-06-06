<?php
ini_set('error_reporting', E_ALL);

date_default_timezone_set('Africa/Johannesburg');

$dbhost = 'shopcals-db.mysql.database.azure.com';
$dbname = 'fashiony';
$dbuser = 'calvinmatonsi';
$dbpass = 'EDUV4891883@';

define("BASE_URL", "https://shopcals.azurewebsites.net/");
define("ADMIN_URL", BASE_URL . "admin/");

try {
    $pdo = new PDO("mysql:host={$dbhost};port=3306;dbname={$dbname}", $dbuser, $dbpass, [
        PDO::MYSQL_ATTR_SSL_CA => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}