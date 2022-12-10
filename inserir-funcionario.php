<header>
    <h3>Inserir Funcionario</h3>
</header>

<?php
    $nomeFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeFuncionario"]));
    $emailFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["emailFuncionario"])); 
    $telefoneFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["telefoneFuncionario"])); 
    $cpfFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["cpfFuncionario"]));
    $enderecoFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["enderecoFuncionario"])); 
    $sexoFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["sexoFuncionario"])); 
    $dataNascFuncionario = strip_tags( mysqli_real_escape_string($conexao,$_POST["dataNascFuncionario"])); 

    $sql = "INSERT INTO tbfuncionarios (
        nomeFuncionario,
        
        emailFuncionario,
        telefoneFuncionario,
        cpfFuncionario,
        enderecoFuncionario,
        sexoFuncionario,
        dataNascFuncionario
    )
    VALUES (
        '{$nomeFuncionario}',
        '{$emailFuncionario}',
        '{$telefoneFuncionario}',
        '{$cpfFuncionario}',
        '{$enderecoFuncionario}',
        '{$sexoFuncionario}',
        '{$dataNascFuncionario}'
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>