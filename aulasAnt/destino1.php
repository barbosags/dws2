<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Destino</title>
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Praticando 1</h1>

        <?php

        $title = $_POST["title"];
        $text = $_POST["text"];
        $colorText = $_POST["colorText"];
        $urlImage = $_POST["urlImage"];
        $urlLink = $_POST["urlLink"];
        $bgColor = $_POST["bgColor"];
        ///$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        //$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        echo "<body style='background-color: $bgColor '>";
        echo "<h1>$title</h1>";
        echo "<p style='color: $colorText'>$text</p>";
        echo "<img src='$urlImage' width='350' height='350'/><br>";
        echo "<a href='$urlLink'>VISITE O SITE</a>";
        echo "</body>"
        ?>

    </div>
</body>

</html>