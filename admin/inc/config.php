<?php
ini_set('error_reporting', E_ALL);

date_default_timezone_set('Africa/Johannesburg');

$dbhost = 'shopcals-db.mysql.database.azure.com';
$dbname = 'fashiony';
$dbuser = 'calvinmatonsi';
$dbpass = 'YOUR_AZURE_DB_PASSWORD';

define("BASE_URL", "https://shopcals-c3gjcmeuf3hdexak.southafricanorth-01.azurewebsites.net/");
define("ADMIN_URL", BASE_URL . "admin/");

try {
    $pdo = new PDO(
        "mysql:host={$dbhost};port=3306;dbname={$dbname};charset=utf8mb4",
        $dbuser,
        $dbpass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
        ]
    );
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
?>