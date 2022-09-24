<?php include("estrutura/cabecalho.php"); ?>

<?php

$palavra = $_POST["txPalavra"];
$significado = $_POST["txSignificado"];
$imagem = $_POST["txImagem"];

echo "Palavra: $palavra <br />";
echo "Significado: $significado <br />";
echo "Imagem: $imagem <br />";

?>
<?php include("estrutura/rodape.php"); ?>