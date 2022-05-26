<?php
session_start();
/* if (!isset($_SESSION['authenticated'])) {
    header('Location: private.php'); //pagina privada
    exit(0);
}  */
require_once 'conecao.php';
if (isset($_POST['login'])) {
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $password = hash('sha512', $password); //segurança
    $sql = "SELECT * FROM utilizador WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
        $_SEESION['message'] = "Login com sucesso.";
        $_SEESION['email'] = $email;
        $_SEESION['password'] = $password;
        header("location: listuser.php"); //vai para o calendario
    } else {
        $_SEESION['message'] = "Email ou Password incorreta, tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>

<body>
    <form class="form" method="POST" action="auth.php" enctype="multipart/form-data">
        <img src="img/estg.png" alt="">
        <br><br>
        <div class="form-input">
            <label for="">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Escreva o email" required>
        </div>
        <div class="form-input">
            <label for="">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Escreva a password" required>
        </div>
        <?php
        if (isset($_SEESION['message'])) {
            echo "<div id='error_msg'>" . $_SEESION['message'] . "</div>";
            unset($_SEESION['message']);
        }
        ?>
        <br>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
</body>

</html>