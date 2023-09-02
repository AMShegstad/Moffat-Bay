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

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

if($conn -> connect_error){

    die("Connection Failed: " . $conn->connect_error);

}

?>
