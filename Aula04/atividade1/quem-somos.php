<section>
        <h1>Quem somos</h1>
</section>

<?php include ("estrutura/cabecalho.php"); ?>

<?php

    $nome = "Caio Kenzo Akatsu";
    $idade = 28;
    $email = "caio.akatsu@etec.sp.gov.br";

    echo "Nome: $nome" . "<br />";
    echo "Idade: $idade" . "<br />";
    echo "E-mail: $email" . "<br />";

    if ($idade < 18) {
        echo "O aluno é menor de idade.";
    }
    else {
        echo "O aluno é maior de idade.";
    }


?>


<?php include("estrutura/rodape.php"); ?>