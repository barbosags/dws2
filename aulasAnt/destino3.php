<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br>

        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $info = filter_input(INPUT_GET, "info", FILTER_SANITIZE_SPECIAL_CHARS);
        $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<h1>$nome</h1><br>";
        echo "<p>$info</p><br>";
        echo "<img src='$img' width='250' height='250' >";
        ?>
    </div>
</body>

</html>