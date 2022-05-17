<?php
session_start();
$host = "localhost";
$database = "pws";
$userdb = "root";
$passdb = "";
$conn = new mysqli($host, $userdb, $passdb, $database);
$sql = mysqli_query($conn, "Select * From utilizador");
$result = mysqli_fetch_assoc($sql);
echo "<table>";
echo  "<tr><td>Email:</td>";
echo "<td>" . $result["email"] . "</td></tr>";
echo  "<tr><td>Nome:</td>";
echo "<td>" . $result["nome"] . "</td></tr>";
echo "</table>";

if (isset($_POST['login'])) {
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $password = hash('sha512', $password); //segurança
    $sql = "SELECT*FROM utilizador WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SEESION['message'] = "Login com sucesso.";
        $_SEESION['email'] = $email;
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
    <title>Login</title>
    <style>
        #error_msg {
            height: 20px;
            padding: 1px;
            color: #FF0000;
        }
    </style>
</head>

<body>
    <form method="POST" action="login.php">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <?php
        if (isset($_SEESION['message'])) {
            echo "<div id='error_msg'>" . $_SEESION['message'] . "</div>";
            unset($_SEESION['message']);
        }
        ?>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>