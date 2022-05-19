<?php
session_start();
require_once 'conecao.php';
$sql = mysqli_query($conn, "Select * From utilizador");
$result = mysqli_fetch_assoc($sql);
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
                <h2>Lista de Users</h2>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Edição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sql as $result) {
                    echo "<tr><td>" . $result["email"] . "</td><td>" . $result["nome"] . "</td><td><a href=''><img src='img/edit.png' alt=''></a><a href=''><img src='img/trash.png' alt=''></a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>