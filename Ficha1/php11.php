<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Inclusão ficheiros</title>
</head>

<body>
    <?php
    require_once 'php11_function.php';
    $arrayContat = array(
        "joao@mail.pt" => "João Silva",
        "jorge@mail.pt" => "Jorge Pereira",
        "sonia@mail.pt"=>"Sónia Silva",
        "ana@mail.pt"=>"Ana Duarte"
    );
    mostrarElement($arrayContat);
    ?>
</body>

</html>