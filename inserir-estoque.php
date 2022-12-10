<header>
    <h3>Inserir Produto</h3>
</header>

<?php
    $idProduto = strip_tags( mysqli_real_escape_string($conexao,$_POST["idProduto"]));
    $idFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["idFornecedor"])); 
    $qtdProduto = strip_tags( mysqli_real_escape_string($conexao,$_POST["qtdProduto"])); 
    $dtEntradaEstoque = strip_tags( mysqli_real_escape_string($conexao,$_POST["dtEntradaEstoque"]));
    $valorDeCompra = strip_tags( mysqli_real_escape_string($conexao,$_POST["valorDeCompra"])); 
    $valorDeVenda = strip_tags( mysqli_real_escape_string($conexao,$_POST["valorDeVenda"])); 

    $sql = "INSERT INTO tbestoque (
        idProduto,
        idFornecedor,
        qtdProduto,
        dtEntradaEstoque,
        valorDeCompra,
        valorDeVenda
    )
    VALUES (
        '{$idProduto}',
        '{$idFornecedor}',
        '{$qtdProduto}',
        '{$dtEntradaEstoque}',
        '{$valorDeCompra}',
        '{$valorDeVenda}'
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>