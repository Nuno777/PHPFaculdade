<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit(0);
}
$email = $_GET["email"];
$nome = $_GET["nome"];
$pass = $_GET["pass"];

$msg_erro = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // validar variáveis
    if ($email == "" || $pass == "" || $nome == "")
        $msg_erro = "Email, nome ou password não inseridos";
    else {
        /* 1: estabelecer ligação à BD */
        require_once 'conecao.php';
        if ($conn->connect_errno) {
            $code = $conn->connect_errno;
            $message = $conn->connect_error;
            $msg_erro = "Falha na ligação à BaseDados ($code $message)!";
        } else {
            // descontaminar variáveis
            $email = $conn->real_escape_string($email);
            $nome = $conn->real_escape_string($nome);
            // $pass não precisa porque não será usada diretamente na query
            $pass_hash = hash('sha512', $pass);

            $query = "UPDATE utilizador SET email='$email' ,nome='$nome' ,pass='$pass' WHERE email='$email'";

            /* if ($foto != "" && getimagesize($_FILES['foto']['tmp_name'])) {
                // tratar upload da foto
                $diretoria_upload = "uploads/";
                $extensao = pathinfo($foto, PATHINFO_EXTENSION);
                $novo_ficheiro = $diretoria_upload . sha1(microtime()) . "." . $extensao;

                if (move_uploaded_file($_FILES['foto']['tmp_name'], $novo_ficheiro)) {
                    $query = "UPDATE utilizador SET email='$email' ,nome='$nome' ,pass='$pass',foto='$novo_ficheiro' WHERE email='$email'";
                }
            } */

            $sucesso_query = mysqli_query($conn, $query);
            if ($sucesso_query) {
                header("Location: listuser.php");
                exit(0);
            } else {
                $code = $conn->errno; // error code of the most recent operation
                $message = $conn->error; // error message of the most recent op.
                $msg_erro = "Falha na query! ($code $message)";
            }
        }
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
    <title>Edit User</title>
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
                    <h2>Edit User</h2>
                    <br>
                </div>
            </div>
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" required>
            </div>
            <div class="form-input">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome = htmlspecialchars($nome) ?>" required>
            </div>
            <div class="form-input">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" value="<?= $pass ?>" required>
            </div>
            <div class="form-input">
                <label for="idFoto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto"><br>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>


</html>