<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Fuoriclasse | Pro Cycling Statistic</title>
    <link rel="icon" type="image/x-icon" href="/ressources/Fuoriclasse_32x32.png">
</head>

<body>
    <header>

    <?php 



    if (!empty($_SESSION) && $_SESSION['role'] === 'admin') {
        include 'menuAdmin.php';
    } elseif (!empty($_SESSION) && $_SESSION['role'] === 'client') {
        include 'menuClient.php';
    } else {
        include 'menuAnonymous.php';
    }

    ?> 

    </header>
