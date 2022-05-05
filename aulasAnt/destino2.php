<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Destino 2</title>
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Praticando 2 - Calculadora</h1>

        <?php

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $media = ($n1 + $n2 + $n3) / 3;

        ///$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        //$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        echo "Um aluno com a nota $n1, $n2 e $n3 tem a média igual a: $media";

        if ($media < 4) {
            $message = "REPROVADO";
            $colorMessage = "red";
        } else if ($media >= 4 && $media < 6) {
            $message = "DE RECUPERAÇÃO";
            $colorMessage = "orange";
        } else if ($media > 6) {
            $message = "APROVADO!!";
            $colorMessage = "green";
        }

        echo "<p>Com essa média o aluno está <span style='font-weight: bold; text-decoration: underline;color: " . $colorMessage . "'>$message</span></p>";

        ?>

    </div>
</body>

</html>