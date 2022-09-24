<?php include("estrutura/cabecalho.php"); ?>

<section>
    <form action="resultado.php" method="post">
        <div>
            <label> Nome: </label> </div>
            <input type="text" name="txPalavra" placeholder="Digite a palavra">
            </label>
        <div>
        <div>
            <label> Descrição: </label> </div>
            <input type="text" name="txSignificado" placeholder="Digite o significado">
            </label>
        <div>
        <div>
            <label> Imagem: </label> </div>
            <input type="text" name="txImagem" placeholder="Digite a imagem">
            </label>
        <div>
            <input type="submit" value="Salvar" />
        </div>
    </form>
</section>


<?php include("estrutura/rodape.php"); ?>