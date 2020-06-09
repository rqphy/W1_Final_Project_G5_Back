<?php
header("Content-Type: application/json");

try{
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=fish;", "root", "");
} catch (PDOException $e){
    die($e->getMessage());
}