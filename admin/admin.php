<?php
require_once __DIR__ . "/admin_co.php";

if (isset($_GET['name'])) {

    $infos = [
        'img_link' => $_GET['img_link'],
        'name' => $_GET['name'],
        'zone' => $_GET['zone'],
        'weight' => $_GET['weight'],
        'size' => $_GET['size'],
        'longevity' => $_GET['longevity'],
        'reproduction' => $_GET['reproduction'],
        'family' => $_GET['family'],
        'species' => $_GET['species'],
        'map_link' => $_GET['map_link'],
        'video_link' => $_GET['video_link'],
        'details' => $_GET['details']
    ];
    // addToPrim($pdo, $infos);
    // addToSec($pdo, $infos);
    echo isset($_GET['reproduction']);
}

//add to primary DB the img link and zone for one element
function addToPrim( PDO $pdo, array $infos): void{
    $stmt = $pdo->prepare('
    INSERT INTO prim (img_link, zone)
    VALUES (?, ?);
    ');
    $stmt->execute([$infos['img_link'], $infos['zone']]);
}

//add to secondary DB the rest of the info for one element
function addToSec( PDO $pdo, array $infos): void{
    $binds = [
        ':name' => $infos['name'],
        ':zone' => $infos['zone'],
        ':weight' => $infos['weight'],
        ':size' => $infos['size'],
        ':longevity' => $infos['longevity'],
        ':reproduction' => $infos['reproduction'],
        ':family' => $infos['family'],
        ':species' => $infos['species'],
        ':map_link' => $infos['map_link'],
        ':video_link' => $infos['video_link'],
        ':details' => $infos['details']
    ];
    $stmt = $pdo->prepare('
    INSERT INTO sec (name, zone, weight, size, longevity, reproduction, family, species, map_link, video_link, details)
    VALUES (:name, :zone, :weight, :size, :longevity, :reproduction, :family, :species, :map_link, :video_link, :details);
    ');
    $stmt->execute($binds);
}
    
// calls both functions above if test has a value
