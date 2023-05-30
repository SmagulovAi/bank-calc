<?php
require "connect.php";

$sql = $database->prepare("SELECT name, year FROM books");
$sql->execute();
$book = $sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Книги</h5>
            <p class="card-text">Весь список книг библиотеки</p>
            <a href="books.php" class="btn btn-primary">Перейти</a>
        </div>
    </div>
    <div class="card">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Читатели</h5>
            <p class="card-text">Весь список читателей</p>
            <a href="books.php" class="btn btn-primary">Перейти</a>
        </div>
    </div> 
</body>

</html>