<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Utilização de arrays</title>
</head>

<body>
    <?php
    $num = range(1, 10);
    $j = 1;
    $q = 1;
    echo "For\n";
    for ($i = 1; $i <= count($num); $i++) {
        echo $i, "\n";
    }
    echo "</br>While\n";
    while ($q <= 10) {
        echo $q++, "\n";
    }
    echo "</br>Do_While\n";
    do {
        echo $j, "\n";
        $j++;
    } while ($j <= 10);
    ?>
</body>

</html>