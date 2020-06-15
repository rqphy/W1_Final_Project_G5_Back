<?php
require_once __DIR__ . "/../admin_co.php";

if (isset($_GET['id'])) {
  $infos = getData($pdo, $_GET['id']);
}


function getData(PDO $pdo, int $id): array {
  $stmt = $pdo->prepare('
    SELECT * FROM infos WHERE id_animals = :id;
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
      <a href="change.php?info=' . $key . '&id=' . $_GET['id'] . '">Change</a>
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
            foreach ($infos[0] as $key => $value) {
              buildTable($key, $value);
          }
        ?>
    </tbody>
  </table>
</body>
</html>

