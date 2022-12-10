<header>
    <h3>Atualizar Estoque</h3>
</header>

<?php
    
    $idEstoque = mysqli_real_escape_string($conexao,$_POST["idEstoque"]);   
    $idProduto = mysqli_real_escape_string($conexao,$_POST["idProduto"]);    
    $idFornecedor =  mysqli_real_escape_string($conexao,$_POST["idFornecedor"]);
    $qtdProduto =  mysqli_real_escape_string($conexao,$_POST["qtdProduto"]); 
    $dtEntradaEstoque =  mysqli_real_escape_string($conexao,$_POST["dtEntradaEstoque"]); 
    $valorDeCompra = mysqli_real_escape_string($conexao,$_POST["valorDeCompra"]);
    $valorDeVenda = mysqli_real_escape_string($conexao,$_POST["valorDeVenda"]); 
    $sql = "UPDATE tbestoque SET

    idEstoque='{$idEstoque}',
    idProduto= '{$idProduto}',
    idFornecedor = '{$idFornecedor}',
    qtdProduto = '{$qtdProduto}',
    dtEntradaEstoque = '{$dtEntradaEstoque}',
    valorDeCompra = '{$valoDeCompra}',
    valorDeVenda = '{$valorDeVenda}',
    WHERE idEstoque= '{$idEstoque}'
    ";
    
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atualizado com sucesso!";
?>