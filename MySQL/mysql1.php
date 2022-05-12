<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
$host="localhost";
$database="pws";
$user="root";
$pass="";
$conn = new mysqli($host, $user, $pass, $database);
?>
<body>
    <label for="">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Login</button>
</body>
</html>