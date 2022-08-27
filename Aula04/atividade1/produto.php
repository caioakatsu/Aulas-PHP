<section>
        <h1>Produto </h1>
</section>

<?php include ("estrutura/cabecalho.php"); ?>

<section>
    <form action = "resultados.php" method = "post">

        <div>
            <div> <label> Produto: </label> </div>
            <input type="text" name="txProduto" />
            </label>
        </div>

        <div>
            <div> <label> Valor: </label> </div>
            <input type="text" name="txValor" />
            </label>
        </div>

        <div>
            <div> <label> Categoria: </label> </div>
            <input type="text" name="txCategoria" />
            </label>
        </div>

        <div>
            <input type="submit" class="bt" value="Enviar" />
        </div>

    </form>
</section>

<?php include("estrutura/rodape.php"); ?>