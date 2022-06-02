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

    <?php
    session_start();
    if (!isset($_SESSION['authenticated'])) {
        header('Location: login.php');
        exit(0);
    }
    require_once 'conecao.php';
    $email = $_GET["email"];
    $email = $conn->real_escape_string($email);
    $query = "SELECT nome,foto FROM utilizador WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if ($result && $result->num_rows) {
        $row = $result->fetch_object();
        $nome = $row->nome;
        $foto = $row->foto;
        if ($foto == null) {
            $foto = "";
        }
    ?>
        <div class="container">
            <form action="editUser.php" id="editUser" class="form" method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>" required>
                </div>
                <div class="form-input">
                    <label for="idFoto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto"><br>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
            </form>
        </div>
    <?php
    } else {
        echo "<script>alert('Selecione um utilizador valido');window.location='listuser.php'</script>";
    }

    /*     if (isset($_POST["#edituser"])) {
        $query = "UPDATE utilizador SET nome='$nome',foto='$foto' WHERE email='$email'";
    } */
    ?>

</body>


</html>