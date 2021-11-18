<?php
require 'conn.php';

$idmakananbasah = $_GET['idmakananbasah'];

$sql = "DELETE FROM senaraimakanan WHERE idmakananbasah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idmakananbasah);
$stmt->execute();

header('location: index.php');