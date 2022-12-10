<?php
$idFornecedor = $_GET['idFornecedor'];
$sql = "SELECT * FROM tbfornecedor WHERE idFornecedor = '{$idFornecedor}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3><i class="bi bi-person-square"></i> Editar Fornecedor</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-fornecedor" method="post">
    <div class="mb-3">
            <label class="form-label" for="idFornecedor">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idFornecedor" value = " <?= $dados["idFornecedor"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomeFornecedor">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeFornecedor" value = " <?= $dados["nomeFornecedor"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailFornecedor">E-Mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailFornecedor" value = " <?= $dados["emailFornecedor"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneFornecedor">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="telefoneFornecedor" value = " <?= $dados["telefoneFornecedor"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="cnpjFornecedor">CNPJ</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-list"></i></span>
                <input class="form-control" type="text" name="cnpjFornecedor" value = " <?= $dados["cnpjFornecedor"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoFornecedor">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="text" name="enderecoFornecedor" value = " <?= $dados["enderecoFornecedor"]?>" required>
            </div>
        </div>
        
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>