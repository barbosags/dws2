<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Formulário</h1>
        <form action="destino2.php" method="POST">

            <div class="d-flex row">
                <div class="col-3">
                    <label>URL de uma imagem:</label>
                    <input type="url" for="urlImage" name="urlImage" id="urlImage" class="form-control" />
                </div>
                <br>
                <div class="col-3">
    <label>Mostrar: </label>
                    <select class="form-control" name="tipoImg" id="cars">
                        <option value="inline">Inline</option>
                        <option value="background">Background</option>
                    </select>

                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-success">Limpar</button>

        </form>

        <?php

        ?>
    </div>
</body>

</html>