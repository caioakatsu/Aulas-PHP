<?php include("estrutura/cabecalho.php"); ?>

<?php

    $palavra = array();
    $palavra[0] = "HD";
    $palavra[1] = "Placa de vídeo";
    $palavra[2] = "Memória RAM";
    $palavra[3] = "Processador";
    $palavra[4] = "Placa-mãe";

    $significado = array();
    $significado[0] = "Um disco rígido é o componente de hardware que armazena todo o seu conteúdo digital.
     Seus documentos, fotos, músicas, vídeos, programas, preferências de aplicativo e sistema operacional 
     representam o conteúdo digital armazenado em um disco rígido.";
    $significado[1] = "Placa de vídeo, também chamada placa gráfica ou aceleradora gráfica, 
     é uma placa de expansão que gera uma saída de alimentação de imagens para um dispositivo de exibição.
     É responsável por gerar e renderizar gráficos tanto 2D quanto 3D.";
    $significado[2] = "A sigla RAM vem do inglês “random access memory”, que pode ser traduzindo para “memória de acesso aleatório”. 
    Esse componente é responsável por dar mais agilidade e velocidade no funcionamento geral do sistema.";
    $significado[3] = "A unidade central de processamento ou CPU, também conhecida como processador, é a parte de um sistema computacional, que realiza as instruções de um programa de computador, que executar a aritmética básica,
     orientado por um padrão binário 0 e 1 que possibilita a entrada, o processamento e saída de dados.";
    $significado[4] = "A placa-mãe é a parte do computador responsável por conectar e interligar todos os componentes, 
    ou seja, processador com memória RAM, disco rígido, placa gráfica, entre outros.";

    $imagem = array();
    $imagem[0] = "img/hd";
    $imagem[1] = "img/placadevideo";
    $imagem[2] = "img/memoriaram";
    $imagem[3] = "img/processador";
    $imagem[4] = "img/placamae";

    for($i = 0; $i<count($palavra); $i++){
        echo "</br >";
        echo "Termo: " . $palavra[$i];
        echo "</br >";
        echo "Significado: " . $significado[$i];
        echo "</br >";
        echo "<img src = $imagem[$i] class = dimensao>";
        echo "</br >";
        echo "</br >";
    }



?>

<?php include("estrutura/rodape.php"); ?>