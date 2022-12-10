<header>
    <h3>Excluir Venda</h3>
</header>
<?php
$idVenda = mysqli_real_escape_string($conexao, $_GET['idVenda']);
$sql = "DELETE FROM tbvendas WHERE idVenda = '{$idVenda}'";
mysqli_query($conexao, $sql) 
or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao) );

echo "Registro excluido com sucesso!";
?>