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

// getData($pdo, $info);
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
        if (isset($_GET['info'])) {
            echo '
            <form method="GET" class="editForm">
                <label for="edit">Edit value here</label>
                <textarea type="text" name="edit" id="edit">' . getData($pdo, $info) . '?</textarea>
                <button>Submit</button>
            </form>';
        } else echo '<p>Data Base edited</p>'
    ?>
    
    
</body>
</html>