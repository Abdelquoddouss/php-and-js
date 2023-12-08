<?php
require_once '../config/conection.php';

header('content-type:application/json');

$result = $conn->query("SELECT * FROM produit WHERE produit_name LIKE '%" . $_POST['name'] . "%'")->fetch_all();

echo json_encode($result);