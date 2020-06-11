<?php
require_once __DIR__ . "/../admin_co.php";

$info = $_GET['info'] ?? '';

function getData(PDO $pdo, string $info) {
    $table = $info !== 'img_link' ? 'sec' : 'prim';
    $stmt = $pdo->prepare('
    SELECT ' . $info . '
    FROM ' . $table . '
    WHERE id_animals = ' . $_GET['id']
    );
    $stmt->execute();
    return $stmt->fetch()[0];
}

getData($pdo, $info);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $info?></title>
</head>
<body>
    <form method='GET'>
        <label for='edit'>Edit value here</label>
        <input type="text" name="edit" id="edit" value='<?= getData($pdo, $info)?>'>

    </form>
</body>
</html>