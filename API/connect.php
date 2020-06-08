<?php
header("Content-Type: application/json");

try{
    $pdo = new PDO("mysql:host=localhost;port=3308;dbname=nottiti;", "root", "");
} catch (PDOException $e){
    die($e->getMessage());
}