<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br>
        <h1>Formulário</h1>
        <hr>
        <form action="destino1.php" method="POST">
            <div class="col-6">
                <label>Título</label>
                <input type="text" for="title" name="title" id="title" class="form-control" />
            </div>
            <br>
            <div class="col-6">
                <label>Corpo</label>
                <textarea type="" for="text" name="text" id="text" class="form-control"></textarea>
            </div>
            <br>
            <div class="col-2">
                <label>Repetir o corpo?:</label>
                <select class="form-control" name="rep" id="cars">
                    <option value="0">Não repetir</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <br>
            <div class="d-flex row">
                <div class="col-2">
                    <label>Cor texto:</label>
                    <input type="color" for="colorText" name="colorText" id="colorText" class="form-control" />
                </div>
                <br>
                <div class="col-4">
                    <label>Cor fundo:</label>
                    <div class="col-3">
                        <input type="color" for="bgColor" name="bgColor" id="bgColor" class="form-control" />
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-6">
                <label>URL de link</label>
                <input type="url" for="urlLink" name="urlLink" id="urlLink" class="form-control" />
            </div>


            <br><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-success">Limpar</button>

        </form>

        <?php

        ?>
    </div>
</body>

</html>