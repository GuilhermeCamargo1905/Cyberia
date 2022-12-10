<header>
    <h3>Excluir Item</h3>
</header>
<?php
$idEstoque = mysqli_real_escape_string($conexao, $_GET['idEstoque']);
$sql = "DELETE FROM tbestoque WHERE idEstoque = '{$idEstoque}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

echo "Registro excluido com sucesso!";
?>