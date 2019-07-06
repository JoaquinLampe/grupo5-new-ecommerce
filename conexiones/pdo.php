<?php

$dsn = "mysql:dbname=integrador_obstgarten;host=127.0.0.1;port=3306";
$user = "root";
$pass = "";

try {
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
