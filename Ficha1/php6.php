<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções (parâmetros e valores devolvidos)</title>
</head>

<body>
    <?php
    echo "A)\n";
    function soma($num1=2, $num2=3){
        $total = $num1 + $num2;
        return $total;
      }
     echo soma();
    ?>
</body>

</html>