<?php
require_once __DIR__ . "/../admin_co.php";

$info = $_GET['info'] ?? '';
$dataSubmited = '
    <div class="submited">
        <p>Data Base edited</p>
        <a href="back_office.php" class="link">Back to main menu</a>
    </div>
';

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

function editData(PDO $pdo, string $tab) {
    $stmt = $pdo->prepare('
    UPDATE ' . $tab . '
    SET ' . $_GET['info'] . ' = "' . $_GET['edit'] . '"
    ');
    $stmt->execute();
    var_dump($stmt);
}

if (isset($_GET['edit'])) {
    if ($_GET['info'] === 'img_link' || $_GET['info'] === 'zone') {
        editData($pdo, 'prim');
        echo 'prim';
    }
    else {
        editData($pdo, 'sec');
        echo 'sec';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/change.css">
    <title>Edit <?= $info?></title>
</head>
<body>
    <?php 
        if (isset($_GET['info']) && !isset($_GET['edit'])) {
            echo '
            <form method="GET" class="editForm">
                <input type="text" name="info" id="info" class="disabled" value="' . $info .'">
                <input type="text" name="id" id="id" class="disabled" value="' . $_GET['id'] . '">
                <label for="edit">Edit value here</label>
                <textarea type="text" name="edit" id="edit">' . getData($pdo, $info) . '</textarea>
                <button>Submit</button>
            </form>';
        }
        if (isset($_GET['edit'])) echo $dataSubmited;
    ?>
    
    
</body>
</html>