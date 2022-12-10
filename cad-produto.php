<header>
    <h3><i class="bi bi-person-square"></i> Cadastro dos produtos</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-produto" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="idProduto">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="idProduto" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomeProduto">Nome do Produto</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeProduto" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailFuncionario">Descrição produto</label>
            <div class="input-group">
                <span class="input-group-text"></span>
                <input class="form-control" type="email" name="descricaoProduto" required>
            </div>
        </div>
        
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>