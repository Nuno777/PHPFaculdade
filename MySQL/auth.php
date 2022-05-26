<?php
session_start();
$_SESSION['errors'] = array(); // Cleanup previous errors
if (isset($_POST['email'])) $email = trim($_POST['email']);
else $email = "";
if (isset($_POST['password'])) $password = trim($_POST['password']);
else $password = "";
if (strlen($email) == 0)
    $_SESSION['errors']['email'] = 'Empty email';
if (strlen($password) == 0)
    $_SESSION['errors']['password'] = 'Empty password';
if (count($_SESSION['errors']) == 0) {
    if (strcmp($email, $password) == 0) { // Some dummy authentication
        $_SESSION['authenticated'] = true;
        $_SESSION['email'] = $email;
        header('Location: listUser.php');
    } else
        $_SESSION['errors']['auth'] = 'Authentication failed';
}
 if (count($_SESSION['errors']) != 0) {
    header('Location: login.php');
    exit(0);
}
