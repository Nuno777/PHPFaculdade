<?php
session_start();
$host = "localhost";
$database = "pws";
$user = "root";
$pass = "";
$conn = new mysqli($host, $user, $pass, $database);
$sql = mysqli_query($conn,"Select * From utilizador");
$result = mysqli_fetch_assoc($sql);
echo "<table>"; 
echo  "<tr><td>Email:</td>";
echo "<td>".$result["email"]."</td></tr>";
echo  "<tr><td>Nome:</td>";
echo "<td>".$result["nome"]."</td></tr>";
echo "</table>"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="login.php?attempt">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>