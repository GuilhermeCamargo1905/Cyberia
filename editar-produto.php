<?php
$idProduto = $_GET['idProduto'];
$sql = "SELECT * FROM tbprodutos WHERE idProduto = '{$idProduto}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3><i class="bi bi-person-square"></i> Editar Produtos</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-produto" method="post">
    <div class="mb-3">
            <label class="form-label" for="idProduto">ID Produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idProduto" value = " <?= $dados["idProduto"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeProduto">Nome Produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeProduto" value = " <?= $dados["nomeProduto"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        
        <div class="mb-3 col-3">
            <label class="form-label" for="descricaoProduto">Descrição do Produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="text" name="descricaoProduto" value = "<?=$dados["descricaoProduto"]?>" required>
            </div>
        </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>