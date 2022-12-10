<header>
    <h3>Excluir Produto</h3>
</header>
<?php
$idProduto = mysqli_real_escape_string($conexao, $_GET['idProduto']);
$sql = "DELETE FROM tbprodutos WHERE idProduto = '{$idProduto}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

echo "Registro excluido com sucesso!";
?>