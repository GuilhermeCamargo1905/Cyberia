<header>
    <h3>Inserir Venda</h3>
</header>

<?php
    $idFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["idFuncionario"])); 
    $dtVenda = strip_tags( mysqli_real_escape_string($conexao,$_POST["dtVenda"])); 
    
    $sql = "INSERT INTO tbvendas (
        idFuncionario,
        dtVenda
    )
    VALUES (
        '{$idFuncionario}',
        '{$dtVenda}'
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>