<?php
session_start();
require_once 'conecao.php';
$email = $_GET["email"];
$query = "DELETE FROM utilizador WHERE email=$email";
$result = mysqli_query($conn, $query);
$fotoDelete = $result->fetch_Object();
unlink("uploads/" . $fotoDelete->foto);
header("location: listUser.php");
?>
