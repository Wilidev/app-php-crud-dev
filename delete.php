<?php 
require 'config/db.php';

$id_producto = $_GET['id_producto'];

$stmt = $pdo->prepare("DELETE FROM productos WHERE id_producto = ?");
$stmt->execute([$id_producto]);
header("Location: index.php");
exit;

?>