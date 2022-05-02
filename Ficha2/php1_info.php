<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Info</title>
</head>
<body>
    <h2>Forms Info</h2>
    <?php
    echo "<p>Bem vindo ".$_POST["nome"]."</p>";
    echo "<p>Tem ".$_POST["age"]." anos</p>";
    ?>
</body>
</html>