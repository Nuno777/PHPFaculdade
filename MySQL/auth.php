<?php
session_start();
require_once 'conecao.php';
$email = ($_POST['email']);
$password = ($_POST['password']);
$password = hash('sha512', $password);
$sql = "SELECT * FROM utilizador WHERE email='$email' AND pass='$password'";
$result = mysqli_query($conn, $sql);
$_SESSION['errors'] = array(); // Limpar erros anteriores
if (isset($_POST['email'])) $email = trim($_POST['email']);
else $email = "";
if (isset($_POST['password'])) $password = trim($_POST['password']);
else $password = "";
if (strlen($email) == 0)
    $_SESSION['errors']['email'] = 'Empty email';
if (strlen($password) == 0)
    $_SESSION['errors']['password'] = 'Empty password';
if (count($_SESSION['errors']) == 0) {
    if (strcmp($email, $password) == 0) { // Alguma autenticação fictícia
        $_SESSION['authenticated'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: listUser.php');
    } else
        $_SESSION['errors']['auth'] = 'Authentication failed';
}
if (count($_SESSION['errors']) != 0) {
    header('Location: login.php');
    exit(0);
}
