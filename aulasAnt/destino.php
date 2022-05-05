<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Destino</title>
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Destino</h1>

        <?php

        //$nome = $_POST["nome"];
        //$email = $_POST["email"];
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        echo "Nome informado: $nome<br>";
        echo "E-mail informado: $email";


        
        ?>

    </div>
</body>

</html>