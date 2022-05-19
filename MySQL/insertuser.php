<?php
session_start();
require_once 'conecao.php';
if(isset($_POST["title"]))
{
 $query = "INSERT INTO events (title, start_event, end_event) VALUES (:title, :start_event, :end_event)";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(':title'  => $_POST['title'],':start_event' => $_POST['start'],':end_event' => $_POST['end']));
}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inserir Users</title>
</head>

<body>

</body>

</html>