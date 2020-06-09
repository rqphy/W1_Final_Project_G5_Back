<?php
require_once __DIR__ . "/connect.php";


// exemple:
// /new.php?table=fish&filter=id_animal&value=5

// Varibables
$table = $_GET['table'] ?? die('\{"info":"no table provided"\}');
$filter = $_GET['filter'] ?? die('\{"info":"no filter provided"\}');
$value = $_GET['value'] ?? die('\{"info":"no value provided"\}');

// Returns sql query according to chosen filter and value
function buildSql(string $table, string $filter) {
  return "SELECT * FROM " . $table . " WHERE " . $filter . " = :value ;";
}

// Get data from db and returns it in json
function getData(PDO $pdo, string $query, string $value): ?string {
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":value", $value, PDO::PARAM_STR);
    $stmt->execute();
    errorHandler($stmt);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$data) return null;
    return json_encode($data); 
}

echo getData($pdo, buildSql($table, $filter),$value);

// Throw error code
function errorHandler(PDOStatement $stmt) {
  if ($stmt->errorCode() !== '00000') {
      throw new PDOException($stmt->errorInfo()[2]);
  }
}