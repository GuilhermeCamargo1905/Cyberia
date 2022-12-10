<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de itens</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-estoque" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="idEstoque">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeFuncionario" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="idProduto">IdProduto</label>
            <div class="input-group">
                <span class="input-group-text"></span>
                <select name="idProduto">
                <option value="">Selecione um Produto</option>
                <?php 
                $sql="SELECT * FROM tbprodutos ";
                $rs=mysqli_query($conexao,$sql);
                while($dados=mysqli_fetch_assoc($rs)){
                    echo '<option value="'.$dados['idProduto'].'">'.$dados['idProduto'].' - '. $dados['nomeProduto'].'</option>';
                }
                ?></select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="idFornecedor">IdFornecedor</label>
            <div class="input-group">
                <span class="input-group-text"></span>
                <select name="idFornecedor">
                <option value="">Selecione um Forneceodr</option>
                <?php 
                $sql="SELECT * FROM tbfornecedor ";
                $rs=mysqli_query($conexao,$sql);
                while($dados=mysqli_fetch_assoc($rs)){
                    echo '<option value="'.$dados['idFornecedor'].'">'.$dados['idFornecedor'].' - '. $dados['nomeFornecedor'].'</option>';
                }
                ?></select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="qtdProduto">Quantidade do produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-list"></i></span>
                <input class="form-control" type="number" name="qtdProduto" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="dtEntradaEstoque">Data de Entrada do Produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dtEntradaEstoque" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="valorDeCompra">Valor de Compra</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="number" name="valorDeCompra" required>
            </div> 
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="valorDeVenda">Valor de Venda</label>
            <div class="input-group">
                <span class="input-group-text"></span>
                <input class="form-control" type="number" name="valorDeVenda" required>
            </div>
        </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>