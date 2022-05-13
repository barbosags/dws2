<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Destino</title>
</head>

<body>
    <div class="container">
        <br><br>
        

        <?php

        $title = $_POST["title"];
        $text = $_POST["text"];
        $rep = $_POST["rep"];
        $colorText = $_POST["colorText"];
        $bgColor = $_POST["bgColor"];
        $urlLink = $_POST["urlLink"];

        $i = 0;
        echo "<body style='background-color: $bgColor'>";
        echo "<h1 style='color: $colorText'>Exercício 1</h1>";
        echo "<h1 style='color: $colorText'>$title</h1>";
        echo "<hr style='color: $colorText'></hr>";
        if (intval($rep) == 0) {
            echo "<p style='color: $colorText'>$text</p>";
        } else {
            for ($i; $i < intval($rep); $i++) {
                echo "<p style='color: $colorText'>$text</p>";
            }
        }

        echo "<a href='$urlLink'>$urlLink</a>";
        echo "</body>"
        ?>

    </div>
</body>

</html>