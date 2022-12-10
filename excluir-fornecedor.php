<header>
    <h3>Excluir Fornecedor</h3>
</header>
<?php
$idFornecedor = mysqli_real_escape_string($conexao, $_GET['idFornecedor']);
$sql = "DELETE FROM tbfornecedor WHERE idFornecedor = '{$idFornecedor}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

echo "Registro excluido com sucesso!";
?>