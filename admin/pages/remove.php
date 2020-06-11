<?php
require_once __DIR__ . "/../admin_co.php";

function getData(PDO $pdo): array {
  $stmt = $pdo->prepare('SELECT * FROM sec;');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buildTable(array $info) {
  echo '
  <tr>
    <td width="80%">' . $info["name"] . '</td>
    <td class="edit">
      <a href="edit.php?id=' . $info["id_animals"] . '">Edit</a>
    </td>
    <td class="delete">
      <a href="delete.php?id=' . $info["id_animals"] .'">delete</a>
    </td>
  </tr>
  ';
}

$infos = getData($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remove</title>
  <link rel="stylesheet" href="../css/remove.css">
</head>
<body>
  <table>
    <thead>
      <tr>
        <th colspan="3">Animals</th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach ($infos as $info) {
            buildTable($info);
          }
        ?>
    </tbody>
  </table>
</body>
</html>