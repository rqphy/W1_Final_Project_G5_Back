<?php
require_once __DIR__ . "/admin_co.php";

$binds = [];
$dataSubmited = '
    <div class="submited">
        <p>Data Base edited</p>
        <a href="pages/back_office.php" class="link">Back to main menu</a>
    </div>
';

// if name is set => user sent infos
if (isset($_GET['name']) && isset($_GET['zone']) && isset($_GET['link'])) {

    $infos = [
        'name' => null,
        'zone' => null,
        'weight' => null,
        'size' => null,
        'longevity' => null,
        'reproduction' => null,
        'family' => null,
        'species' => null,
        'link' => null,
        'video_link' => null,
        'details' => null
    ];
    // build $binds and fill $infos with user's infos
    foreach($infos as $key => $inf) {
        if ($_GET[$key] !== '') {
            $infos[$key] = $_GET[$key];
        }
        $binds[':'.$key] = $infos[$key];
    }
    addToDb($pdo, $binds);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Submited</title>
    </head>
    <body>
        <?= $dataSubmited?>
    </body>
    </html>
    <?php
}



//add to secondary DB the rest of the info for one element
function addToDb( PDO $pdo, array $infos): void{
    $stmt = $pdo->prepare('
    INSERT INTO infos (name, zone, weight, size, longevity, reproduction, family, species, link, video_link, details)
    VALUES (:name, :zone, :weight, :size, :longevity, :reproduction, :family, :species, :link, :video_link, :details);
    ');
    $stmt->execute($infos);
}