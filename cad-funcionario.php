<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Funcionarios</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-funcionario" method="post" novalidate>
        <div class="mb-3">
            <label class="form-label" for="nomeFuncionario">Nome</label>
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
            <label class="form-label" for="emailFuncionario">E-Mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailFuncionario" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneFuncionario">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="telefoneFuncionario" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneFuncionario">CPF</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-list"></i></span>
                <input class="form-control" type="text" name="cpfFuncionario" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoFuncionario">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input class="form-control" type="text" name="enderecoFuncionario" required>
            </div>
        </div>
        <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="sexoFuncionario">Sexo</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select class="form-select" name="sexoFuncionario" id="sexoFuncionario" required>
                <option selected value="">Selecione o sexo do funcionario</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            </div>
           
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="dataNascFuncionario">Data de Nasc.</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataNascFuncionario" required>
            </div>
        </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>