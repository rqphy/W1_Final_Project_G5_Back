<?php
require_once __DIR__ . "/admin_co.php";

$binds = [];

// if name is set => user sent infos
if (isset($_GET['name'])) {

    $infos = [
        'img_link' => null,
        'name' => null,
        'zone' => null,
        'weight' => null,
        'size' => null,
        'longevity' => null,
        'reproduction' => null,
        'family' => null,
        'species' => null,
        'map_link' => null,
        'video_link' => null,
        'details' => null
    ];
    // build $binds and fill $infos with user's infos
    foreach($infos as $key => $inf) {
        if ($_GET[$key] !== '') {
            $infos[$key] = $_GET[$key];
        }
        if ($key !== 'img_link') $binds[':'.$key] = $infos[$key];
    }
    addToPrim($pdo, $infos);
    addToSec($pdo, $binds);
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
    $stmt = $pdo->prepare('
    INSERT INTO sec (name, zone, weight, size, longevity, reproduction, family, species, map_link, video_link, details)
    VALUES (:name, :zone, :weight, :size, :longevity, :reproduction, :family, :species, :map_link, :video_link, :details);
    ');
    $stmt->execute($infos);
}