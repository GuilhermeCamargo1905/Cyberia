<header>
    <h3>Atualizar Fornecedor</h3>
</header>

<?php
    $idFornecedor = mysqli_real_escape_string($conexao,$_POST["idFornecedor"]);    
    $nomeFornecedor =  mysqli_real_escape_string($conexao,$_POST["nomeFornecedor"]);
    $emailFornecedor =  mysqli_real_escape_string($conexao,$_POST["emailFuncionario"]); 
    $telefoneFornecedor =  mysqli_real_escape_string($conexao,$_POST["telefoneFornecedor"]); 
    $cnpjFornecedor = mysqli_real_escape_string($conexao,$_POST["cnpjFornecedor"]);
    $enderecoFornecedor = mysqli_real_escape_string($conexao,$_POST["enderecoFornecedor"]); 
    $sql = "UPDATE tbfornecedor SET

    nomeFornecedor= '{$nomeFornecedor}',
    emailFornecedor = '{$emailFornecedor}',
    cnpjFornecedor = '{$cnpjFornecedor}',
    telefoneFornecedor = '{$telefoneFornecedor}',
    enderecoFornecedor = '{$enderecoFornecedor}',
    WHERE idFornecedor = '{$idFornecedor}'
    ";
    
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atualizado com sucesso!";
?>