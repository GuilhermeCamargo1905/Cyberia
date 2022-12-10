<header>
    <h3>Atualizar Venda</h3>
</header>

<?php
    $idFuncionario = mysqli_real_escape_string($conexao,$_POST["idFuncionario"]);  
    $idVenda = mysqli_real_escape_string($conexao,$_POST["idVenda"]);
    $dtVenda = mysqli_real_escape_string($conexao,$_POST["dtVenda"]); 
    

    $sql = "UPDATE tbvendas SET

    idFuncionario= '{$idFuncionario}',
    dtVenda = '{$dtVenda}',
    idVenda = '{$idVenda}'
    WHERE idVenda = '{$idVenda}'
    ";
    
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atuaizado com sucesso!";
?>