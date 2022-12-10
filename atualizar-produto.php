<header>
    <h3>Atualizar Produto</h3>
</header>

<?php
    $idProduto = mysqli_real_escape_string($conexao,$_POST["idProduto"]);    
    $nomeProduto =  mysqli_real_escape_string($conexao,$_POST["nomeProduto"]);
    $descricaoProduto =  mysqli_real_escape_string($conexao,$_POST["descricaoProduto"]); 

    $sql = "UPDATE tbprodutos SET

    nomeProduto = '{$nomeProduto}',
    idProduto = '{$idProduto}',
    descricaoProduto = '{$descricaoProduto}'
    WHERE idProduto = '{$idProduto}'
    ";
    
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atuaizado com sucesso!";
?>