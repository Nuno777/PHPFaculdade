<?php
session_start();
require_once 'conecao.php';
$query = "SELECT * FROM utilizador";
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
    <title>List Users</title>
</head>

<body>
    <header id="header">
        <?php
        require_once 'navbar.php';
        ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2>List Users</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //$foto = null;
                while ($row = $result->fetch_object()) {
                    $foto = $row->foto;
                    if ($foto == null) {
                        $foto = 'uploads/semImage.png';
                    }
                    echo "<tr>";
                    echo "<td><img src='$foto' alt='Imagem' height='50px'></td>";
                    echo "<td>" . $row->email . "</td><td>" . $row->nome . "</td>";
                    echo "<td><a href='editUser.php?email=$row->email' name='edit'><img src='img/edit.png' alt='Edit'></a></td>";
                    echo "<td><a href='deleteUser.php?email=$row->email' name='delete'><img src='img/delete.png' alt='Delete'></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>