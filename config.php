<?php

$dotenv = fopen('.env', 'r');

while(!feof($dotenv)){

    $line = trim(fgets($dotenv));

    if($line && strpos($line, '=') !== false){

        list($key, $value) = explode('=', $line, 2);

        $_ENV[$key] = $value;

    }

}

fclose($dotenv);

$dbHost = $_ENV['DB_HOST'];

$dbUsername = $_ENV['DB_USERNAME'];

$dbPassword = $_ENV['DB_PASSWORD'];

$dbDatabase = $_ENV['DB_DATABASE'];

$db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbDatabase . ';charset=utf8', $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);