<?php
require_once __DIR__ . '/../admin_co.php';

$dataSubmited = '
    <div class="submited">
        <p>Data Base edited</p>
        <a href="back_office.php" class="link">Back to main menu</a>
    </div>
';

function removeFromDb(PDO $pdo, int $id): void {
  $stmt = $pdo->prepare('DELETE FROM infos WHERE id_animals = :id;');
  $stmt->bindValue(':id', $id);
  $stmt->execute();
}

if (isset($_GET['id'])) {
  removeFromDb($pdo, $_GET['id']);
}

if (isset($_GET['id'])) {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
  <?= $dataSubmited?>
  </body>
  </html>
  <?php
}