<?php
session_start();
require_once 'conecao.php';
$_SESSION['errors'] = array(); //Limpar erros anteriores
if (isset($_POST['email'])) $email = trim($_POST['email']);
else $email = "";
if (isset($_POST['password'])) $password = trim($_POST['password']);
else $password = "";
if (strlen($email) == 0)
    $_SESSION['errors']['email'] = 'Empty email';
if (strlen($password) == 0)
    $_SESSION['errors']['password'] = 'Empty password';
if (count($_SESSION['errors']) == 0) {
    $email = mysqli_real_escape_string($conn, $email);
    $sql = "SELECT email,pass FROM utilizador WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result && $result->num_rows != 0) {
        $password = hash('sha512', $password);
        if ($result->fetch_object()->pass == $password) {
            $_SESSION['authenticated'] = true;
            $_SESSION['email'] = $email;
            header('Location: listuser.php');
        } else {
            $_SESSION['errors']['auth'] = 'Email/password incorretas';
        }
    }
}
if (count($_SESSION['errors']) != 0) {
    header('Location: login.php');
    exit(0);
}
?>