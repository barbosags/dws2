<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body >
    <div class="container">
        <h1>Destino GET</h1>
        <div>

            

        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Nome informado: $nome</p><br>";
        echo "<p>Email $email</p><br>";

        ?>

            <br>
            <a href="destino-get.php?nome=Gabriel Barbosa&email=gabriel@gmail.com&cor=<?=$cor?>">
               <p>Nome Gabriel Barbosa Email gabriel@gmail.com</p>
            </a>
            <a href="destino-get.php?nome=José Silva&email=josé@gmail.com&cor=<?=$cor?>">
               <p>Nome José Silva Email josé@gmail.com</p>
            </a>
            <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightblue">
               <p>Cor: Azul claro (lightblue)</p>
            </a>
     
            <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightgreen">
            <p>Cor: Verde claro (lightgreen)</p>
            </a>
            <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightcoral">
            <p>Cor: Vermelho claro (lightcoral)</p>
            </a>
     
    <style>
    body{
        background-color: <?= $cor ?>;
    }
    </style>
   
    </div>
</body>

</html>