<?php
// Adatbázis csatlakozás
$config = [
    "DB_HOST" => "localhost",
    "DB_USER" => "root",
    "DB_PASS" => "",
    "DB_NAME" => "beauty-auchan"
];

// $config = [
//     "DB_HOST" => "localhost",
//     "DB_USER" => "beautyn2_karaKrisz",
//     "DB_PASS" => "Hacker13prog",
//     "DB_NAME" => "beautyn2_beautyauchan"
// ];

$connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
$sql = "set names utf8";
mysqli_query($connection, $sql);

if (!$connection) {
    die('Connection :error:' . mysqli_connect_error());
}
