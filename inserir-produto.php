<header>
    <h3>Inserir Produto</h3>
</header>

<?php
    $nomeProduto = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeProduto"]));
    $idProduto = strip_tags( mysqli_real_escape_string($conexao,$_POST["idProduto"])); 
    $descricaoProduto = strip_tags( mysqli_real_escape_string($conexao,$_POST["descricaoProduto"])); 


    $sql = "INSERT INTO tbprodutos(
        nomeProduto,
        idProduto,
        descricaoProduto
    )
    VALUES (
        '{$nomeProduto}',
        '{$idProduto}',
        '{$descricaoProduto}',
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>