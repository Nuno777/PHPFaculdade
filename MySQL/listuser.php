<?php
session_start();
require_once 'conecao.php';
$query = mysqli_query($conn, "Select * From utilizador");
$result = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Listar Users</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2>Listar Users</h2>
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
                foreach ($query as $result) {
                    /* while ($row = $query->fetch_object()) {
                        $foto = $row->foto;
                        if ($foto == null) {
                            $foto = 'uploads/semImage.png';
                        }
                    } */
                    echo "<tr>";
                    echo "<td><img src='$foto' alt='Imagem' height='50px'/></td>";
                    echo "<td>" . $result["email"] . "</td><td>" . $result["nome"] . "</td>";
                    echo "<td><a href=''><img src='img/edit.png' class='edit' alt='Edit' ></a><a href=''><img src='img/trash.png' class='trash' alt='Clear'></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>