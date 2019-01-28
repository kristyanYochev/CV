<?php
$db_host = "127.0.0.1";
$db_name = "php_test";
$db_username = "root";
$db_pass = "";

$secret_key = "sfdghjkladfasdfhkdvhfh";

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";

$opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT => true
);

try 
{
    $db = new PDO($dsn, $db_username, $db_pass, $opt);
} 
catch(PDOException $e) 
{
    echo "Connection error :" . $e->getMessage();
}
?>