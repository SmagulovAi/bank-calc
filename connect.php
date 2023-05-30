<?php

$host = "127.0.0.1";
$port = "3306";
$dbname = "biblioteka";
$user = "root";
$password = "";

$dsn = "mysql:host={$host};dbname={$dbname};port={$port};";

$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

$database = new PDO($dsn, $user, $password, $options);