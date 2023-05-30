<?php
require "connect.php";

$sql = $database->prepare("SELECT name FROM readers");
$sql->execute();
$user = $sql->fetchAll();

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
    <div class="container mt-3">
        <?php foreach ($user as $readers) : ?>
        <div class="card-body mt-4 border p-2">
            <h5 class="card-title"><?= $readers['name'] ?></h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>