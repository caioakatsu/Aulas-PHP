<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>

<!-- 5 - Utilizando vetores e laços de repetição,
 crie uma página que exiba a imagem referente a um país, seu nome e o seu continente.  -->

    <?php

        $paises = array();
        $paises[0] = "Brasil";
        $paises[1] = "Angola";
        $paises[2] = "Peru";
        $paises[3] = "Bolívia";
        $paises[4] = "França";

        $continente = array();
        $continente[0] = "América do Sul";
        $continente[1] = "Africa";
        $continente[2] = "América do Sul";
        $continente[3] = "América do Sul";
        $continente[4] = "Europa";

        $imagem = array();
        $imagem[0] = "img/brasil";
        $imagem[1] = "img/angola";
        $imagem[2] = "img/peru";
        $imagem[3] = "img/bolivia";
        $imagem[4] = "img/franca";

        for($i = 0; $i<count($paises); $i++){
            echo "</br >";
            echo "País: " . $paises[$i];
            echo "</br >";
            echo "Continente: " . $continente[$i];
            echo "</br >";
            echo "<img src = $imagem[$i] class = dimensao";
            echo "</br >";
            echo "</br >";
        }

    ?>
</body>
</html>