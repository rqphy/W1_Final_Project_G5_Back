<?php
require_once __DIR__ . "/../admin_co.php";

if (isset($_GET['id'])) {
  $infos = getData($pdo, 'prim', $_GET['id']);
  array_push($infos, getData($pdo, 'sec', $_GET['id'])[0]);
}


function getData(PDO $pdo, string $table, int $id): array {
  $stmt = $pdo->prepare('
    SELECT * FROM ' . $table . ' WHERE id_animals = :id;
  ');
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buildTable($key, $info) {
  echo '
  <tr>
    <td>
      ' . $key . '
    </td>
    <td>
      ' . $info . '
    </td>
    <td class="edit">
      <a href="change.php?info=' . $key . '">Change</a>
    </td>
  </tr>
  ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="../css/remove.css">
</head>
<body>
  <table>
    <thead>
      <tr>
        <th colspan="3">Animal's infos</th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach ($infos as $info) {
            foreach ($info as $key => $value) {
              buildTable($key, $value);
            }
          }
        ?>
    </tbody>
  </table>
</body>
</html>

