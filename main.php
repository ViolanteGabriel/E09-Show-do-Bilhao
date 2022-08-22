<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>

    <div class="cabecalho">
        <h1>Show Do Bilhão</h1>
    </div>

    <div class="perguntas">
        
        <?php
            include "dados_perguntas.php";
            
            for($i = 0; $i < 5; $i++){
                echo $enunciados[$i]. "<br/>";
                
                for($f = 0; $f < 5; $f++){
                    echo $respostas[$i][$f]. "<br/>";
                }
                
            }
        ?>

    </div>

</body>
</html>