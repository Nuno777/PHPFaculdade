<?php
session_start();
require_once 'conecao.php';
$query = "DELETE FROM utilizador where id=2";
$result = $conn->query($query);
header("location: listUser.php");
?>