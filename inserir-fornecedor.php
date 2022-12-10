<header>
    <h3>Inserir Fornecedor</h3>
</header>

<?php
    $nomeFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeFornecedor"]));
    $emailFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["emailFornecedor"])); 
    $telefoneFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["telefoneFornecedor"])); 
    $cnpjFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["cnpjFornecedor"]));
    $enderecoFornecedor = strip_tags( mysqli_real_escape_string($conexao,$_POST["enderecoFornecedor"])); 
    
    $sql = "INSERT INTO tbfornecedor (
        nomeFornecedor,
        
        emailFornecedor,
        telefoneFornecedor,
        cpnpjFornecedor,
        enderecoFornecedor,
        
    )
    VALUES (
        '{$nomeFornecedor}',
        '{$emailFornecedor}',
        '{$telefoneFornecedor}',
        '{$cpfFornecedor}',
        '{$enderecoFornecedor}',
        
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>