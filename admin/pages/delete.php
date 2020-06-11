<?php
require_once __DIR__ . '/../admin_co.php';

function removeFromDb(PDO $pdo, int $id, string $table): void {
  $stmt = $pdo->prepare('DELETE FROM ' . $table .' WHERE id_animals = :id;');
  $stmt->bindValue(':id', $id);
  $stmt->execute();
}

if (isset($_GET['id'])) {
  removeFromDb($pdo, $_GET['id'],'prim');
  removeFromDb($pdo, $_GET['id'],'sec');
}