<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Formulário</h1>
        <hr>
        <form action="exercicio3.php" method="GET">
            <label>Preço:</label>
            <div class="col-2">
                <input type="number" for="preco" name="preco" id="preco" class="form-control" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            <br>
        </form>
        <hr>
        <?php
        
        if (isset($_GET['preco'])) {


            $preco = $_GET['preco'];

            $avista = $preco - $preco * 0.05;
            $parc3 = $preco /3;
            $parc5 = $preco /3;
            $parc12 = $preco /3;
            $parc18 = $preco /3;

            $juros1 = $preco * 0.05 + $preco;
            $juros2 = $preco * 0.1 + $preco;
            $juros3 = $preco * 0.15 + $preco;
            

            echo "<p>O preço informado <b>R$$preco</b> </p>";
            echo "<p>As condições de pagamento são:</p>";
            echo "<ul>";
            echo "<li>à vista <b>R$$avista <span style='color: green'>(5% de desconto)</span></b></li>";
            echo "<li>parcelado em 3x de <b>R$$parc3</b> totalizando <b>R$$preco</b></li> ";
            echo "<li>parcelado em 5x de <b>R$$parc5</b> totalizando <b>R$$juros1 <span style='color: red'>(5% de desconto)</span></b></li>";
            echo "<li>parcelado em 12x de <b>R$$parc12</b> totalizando <b>R$$juros2 <span style='color: red'>(10% de desconto)</span></b></li>";
            echo "<li>parcelado em 18x de <b>R$$parc18</b> totalizando <b>R$$juros3 <span style='color: red'>(15% de desconto)</span></b></li>";
            echo "</ul>";
           
        } else {
            echo "<p></p>";
        }
        ?>
    </div>
</body>

</html>