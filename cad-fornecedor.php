<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Fornecedor</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-fornecedor" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeFornecedor">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeFornecedor" required>
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
                <input class="form-control" type="email" name="emailForcedor" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneForcedor">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="telefoneFornecedor" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="cnpjFornecedor">CNPJ</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-list"></i></span>
                <input class="form-control" type="text" name="cnpjFornecedor" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoFornecedor">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="text" name="enderecoFornecedor" required>
            </div>
        </div>
        
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>