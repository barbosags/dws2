<?php

use Claudsonm\CepPromise\CepPromise;

require '../../vendor/autoload.php';


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Formulário</h1>
        <form action="praticando1.php" method="POST">
            <div class="col-6">
                <label>CEP</label>
                <input type="text" for="title" name="cep" id="cep" class="form-control" />
            </div>
            <br>

            <br><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-success">Limpar</button>

        </form>

        <?php


        if (isset($_POST['cep'])) {
            try {

                $cep = $_POST['cep'];

                $address = CepPromise::fetch($cep);
                echo "<br><h1>CEP: $address->zipCode</h1><br>";
                echo "<br>Rua: $address->street<br>";
                echo "<br>Bairro: $address->district<br>";
                echo "<br>Cidade: $address->city<br>";
                echo "<br>Estado: $address->state<br>";
            } catch (Exception $err) {
                echo "$err não foi achado nenhum cep";
            }
        }

        ?>
    </div>
</body>

</html>