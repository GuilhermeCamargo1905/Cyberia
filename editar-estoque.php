<?php
$idEstoque = $_GET['idEstoque'];
$sql = "SELECT * FROM tbestoque WHERE idEstoque = '{$idEstoque}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3><i class="bi bi-person-square"></i> Editar Item</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-estoque" method="post">
    <div class="mb-3">
            <label class="form-label" for="idEstoque">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idEstoque" value = " <?= $dados["idEstoque"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="idProduto">Produto</label>
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
            <label class="form-label" for="idFornecedor">Fornecedor</label>
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
            <label class="form-label" for="qtdProduto">Quantidade</label>
            <div class="input-group">
                <span class="input-group-text"><i class=""></i></span>
                <input class="form-control" type="number" name="qtdProduto" value = "<?= $dados["qtdProduto"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="dtEntradaEstoque">Data de Entrada</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-list"></i></span>
                <input class="form-control" type="date" name="dtEntradaEstoque" value = "<?= $dados["dtEntradaEstoque"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="valorDeCompra">Valor de Compra</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="number" name="valorDeCompra" value = " <?= $dados["valorDeCompra"]?>" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="valorDeVenda">Valor de Venda</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="number" name="valorDeVenda" value = " <?= $dados["valorDeVenda"]?>" required>
            </div>
        </div>
        
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>