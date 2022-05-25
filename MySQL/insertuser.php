<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
    exit(0);
}

// se possível, ler variáveis de POST
$email = array_key_exists('email', $_POST) ? $_POST['email'] : "";
$nome = array_key_exists('nome', $_POST) ? $_POST['nome'] : "";
$pass = array_key_exists('pass', $_POST) ? $_POST['pass'] : "";
$foto = array_key_exists('foto', $_FILES) ? $_FILES['foto']['name'] : "";

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

            /* 2: executar query... */
            $query = "INSERT INTO `utilizador` (`email`, `nome`, `pass`) VALUES ('$email', '$nome', '$pass_hash')";

            if ($foto != "" && getimagesize($_FILES['foto']['tmp_name'])) {
                // tratar upload da foto
                $diretoria_upload = "uploads/";
                $extensao = pathinfo($foto, PATHINFO_EXTENSION);
                $novo_ficheiro = $diretoria_upload . sha1(microtime()) . "." . $extensao;

                if (move_uploaded_file($_FILES['foto']['tmp_name'], $novo_ficheiro)) {
                    $query = "INSERT INTO `utilizador` (`email`, `nome`, `pass`, `foto`) VALUES ('$email', '$nome', '$pass_hash', '$novo_ficheiro')";
                }
            }

            $sucesso_query = $conn->query($query);
            if ($sucesso_query) {
                header("Location: listUser.php");
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
    <title>Insert Users</title>
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
                    <h2>Insert User</h2>
                    <br>
                </div>
            </div>
            <div class="form-input">
                <label for="idEmail">Email</label>
                <input type="email" class="form-control" id="idEmail" name="email" placeholder="Escreva o email" value="<?= $email ?>" required>
            </div>
            <div class="form-input">
                <label for="idNome">Nome</label>
                <input type="text" class="form-control" id="idNome" name="nome" placeholder="Escreva o nome" value="<?= $nome = htmlspecialchars($nome) ?>" required>
            </div>
            <div class="form-input">
                <label for="idPass">Password</label>
                <input type="password" class="form-control" id="idPass" name="pass" placeholder="Escreva a password" value="<?= $pass ?>" required>
            </div>
            <div class="form-input">
                <label for="idFoto">Foto</label>
                <input type="file" class="form-control" id="idFoto" name="foto"><br>
            </div>
            <?php if ($msg_erro != "") { ?>
                <p id="erro"><?= $msg_erro ?></p>
            <?php } ?>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
    </div>
</body>

</html>