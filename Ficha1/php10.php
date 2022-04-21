<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Produção HTML + Funções</title>
</head>

<body>
    <?php
    function mostrarElement($arrayContat)
    {
        ksort($arrayContat);
        echo "<table><tr><th>Email</th><th>Nome</th></tr>";
        foreach ($arrayContat as $contat => $nome) {
            echo "<tr><td>$contat</td><td>$nome</td></tr>";
        }
        echo "</table>";
    }
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