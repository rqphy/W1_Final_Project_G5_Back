<?php
require_once __DIR__ . "/connect.php";

// $name = $_GET['name'];
// exemple:
            // /index.php?table=fish&bind=fishId&values=1001
            // OR /index.php?table=fish&bind=fishId_name&values=1001_nemo

if (!isset($_GET['table'])) {
    die('\{"info":"no table found"\}');   
}

$table = $_GET['table'];
        
$str = "";
if (isset($_GET['bind'])) {
    $bind = explode("~", $_GET['bind']);
    if (!isset($_GET['values'])) {
        die('\{"info":"no value provided"\}');
    }
    $values = explode("~", $_GET['values']);

    if (count($bind) > 0) {
        $str = " WHERE ";
        $i = 0;
        foreach ($bind as $b) {
            $str .= $b . " = :" . $b . " ";
            $i++;
        }
    } else {
        $bind = array();
    } 
}       
            // build query
$query = "SELECT * FROM " . $table . $str;
// die($query);
function errorHandler(PDOStatement $stmt) {
    if ($stmt->errorCode() !== '00000') {
        throw new PDOException($stmt->errorInfo()[2]);
    }
}

function getData(PDO $pdo, string $query): ?string {
    global $bind;
    global $values;
    $stmt = $pdo->prepare($query);
    // WHERE prenom = :name;
    
    // bind all
    foreach($bind as $index => $b) {
        $tmp = ":" . $b;
        $stmt->bindValue($tmp, $values[$index], PDO::PARAM_STR);
    }
    var_dump($stmt);
    $stmt->execute();
    errorHandler($stmt);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$data) return null;
    return json_encode($data); 
}

echo getData($pdo, $query);
?>