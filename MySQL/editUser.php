<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit(0);
}
require_once 'conecao.php';
$email = $_GET["email"];
$nome = $_GET["nome"];
$pass = $_GET["pass"];
$query = "UPDATE utilizador SET email='$email',nome='$nome',pass='$pass' WHERE email='$email'";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Update User</title>
</head>

<body>
    <header id="header">
        <?php
        require_once 'navbar.php';
        ?>
    </header>
    <div class="container">
        <form action="insertUser.php" id="insertUser" class="form" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12" class="form">
                    <h2>Update User</h2>
                    <br>
                </div>
            </div>
            <div class="form-input">
                <label for="idEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" required>
            </div>
            <div class="form-input">
                <label for="idNome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome = htmlspecialchars($nome) ?>" required>
            </div>
            <div class="form-input">
                <label for="idPass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" value="<?= $pass ?>" required>
            </div>
            <!-- <div class="form-input">
                <label for="idFoto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto"><br>
            </div> -->
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>


</html>