<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Destino</title>
</head>

<div class="container">
    <h1>Exercício 2</h1>

    <hr>
    <br>
    <br>

    <?php


    $urlImage = $_POST["urlImage"];
    $tipoImg = $_POST["tipoImg"];


    if ($tipoImg !== 'inline') {
        echo "<body class='bodyVar'>";
    } else {
        echo "<img src='$urlImage' width='550' height='450'/><br>";
    }

    ?>


    <div class="imgDiv">

    </div>

    <?php

    $urlImage = $_POST["urlImage"];
    $tipoImg = $_POST["tipoImg"];


    ?>


    <style>
        .bodyVar {
            background: url(<?= $urlImage ?>) no-repeat;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
    </style>

</div>
<?php echo '</body>'; ?>


</html>