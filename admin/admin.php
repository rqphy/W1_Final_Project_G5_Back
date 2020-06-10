<?php
require_once __DIR__ . "/admin_co.php";

$test = $_GET["test"] ?? '';
$infos = [
    'img_link' => 'mariette',
    'name' => 'Mariette',
    'zone' => 3,
    'weight' => 'very heavy',
    'size' => 'huge AF',
    'longevity' => '4,3 M yo',
    'reproduction' => 'he geres de la go',
    'family' => "yevette's dodgy cousin",
    'species' => 'unique individual',
    'map_link' => 'mariette_map',
    'video_link' => 'UAGhdiaj',
    'details' => 'pose pas de questions yaura pas de reponses'
];

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
if ($test !== '') {
    addToPrim($pdo, $infos);
    addToSec($pdo, $infos);
}