<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body >
    <div>
        <h1>Desafio #1 </h1>
        <div>
            <h3>Ordenar sequências com delimitadores desconhecidos</h3>
            <hr>

        <?php
       
        $n = $_GET['n'];
        $array_number = [];
        
        $aux = preg_replace('/[^0-9]/', ',', $n);
        
        echo "Ordem digitada: $aux";

        echo "<br>";

        $array_number_cres = explode(',', $aux);
        $array_number_decres = explode(',', $aux);
            

        asort($array_number_decres);
        arsort($array_number_cres);
        echo "Ordem crescente "; 
        foreach($array_number_cres as $array_number_cres){
            echo "$array_number_cres,";
        }

        echo "<br>-------------------<br> ";

        echo "Ordem decrescente "; 
        foreach($array_number_decres as $array_number_decres){
            echo "$array_number_decres,";
        }
        ?>

    <style>
    body{
        background-color: <?= $cor ?>;
    }
    </style>
   
    </div>
</body>

</html>