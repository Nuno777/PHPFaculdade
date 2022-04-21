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
?>