<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formulários Multi</title>
</head>

<body>
    <form action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="unidade">Unidade Curricular:</label>
        <br>
        <input type="radio" value="pw">
        <label for="pw">PW</label><br>
        <input type="radio" value="cti">
        <label for="cti">CTI</label><br>
        <input type="radio" value="pws">
        <label for="pws">PWS</label><br>

        <label for="programacao">Linguagem de Programação:</label>
        <br>
        <input type="radio" value="php">
        <label for="php">PHP</label><br>
        <input type="radio" value="c">
        <label for="c">C</label><br>
        <input type="radio" value="javascript">
        <label for="javascript">JavaScript</label><br>
        <br>
        <button type="submit">Submeter</button>
    </form>
</body>

</html>