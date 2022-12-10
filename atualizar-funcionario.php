<header>
    <h3>Atualizar Funcionario</h3>
</header>

<?php
    $idFuncionario = mysqli_real_escape_string($conexao,$_POST["idFuncionario"]);    
    $nomeFuncionario =  mysqli_real_escape_string($conexao,$_POST["nomeFuncionario"]);
    $emailFuncionario =  mysqli_real_escape_string($conexao,$_POST["emailFuncionario"]); 
    $telefoneFuncionario =  mysqli_real_escape_string($conexao,$_POST["telefoneFuncionario"]); 
    $cpfFuncionario = mysqli_real_escape_string($conexao,$_POST["cpfFuncionario"]);
    $enderecoFuncionario = mysqli_real_escape_string($conexao,$_POST["enderecoFuncionario"]); 
    $sexoFuncionario = mysqli_real_escape_string($conexao,$_POST["sexoFuncionario"]); 
    $dataNascFuncionario = mysqli_real_escape_string($conexao,$_POST["dataNascFuncionario"]); 

    $sql = "UPDATE tbfuncionarios SET

    nomeFuncionario= '{$nomeFuncionario}',
    emailFuncionario = '{$emailFuncionario}',
    cpfFuncionario = '{$cpfFuncionario}',
    telefoneFuncionario = '{$telefoneFuncionario}',
    enderecoFuncionario = '{$enderecoFuncionario}',
    sexoFuncionario = '{$sexoFuncionario}',
    dataNascFuncionario = '{$dataNascFuncionario}'
    WHERE idFuncionario = '{$idFuncionario}'
    ";
    
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi atuaizado com sucesso!";
?>