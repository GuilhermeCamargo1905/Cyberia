<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Venda</h3>
</header>
<div>
<form class="needs-validation" action="index.php?menuop=inserir-venda" method="post" novalidate>
       <div class="mb-3">
            <label class="form-label" for="idVenda">Id</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeFornecedor" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
            </div>
         </div>
   <div class="mb-3">
            <label class="form-label" for="idFuncionario">IdFuncionario</label>
            <div class="input-group">
                <span class="input-group-text"></span>
                <select name="idFuncionario">
                <option value="">Selecione um Funcionario</option>
                <?php 
                $sql="SELECT * FROM tbFuncionarios ";
                $rs=mysqli_query($conexao,$sql);
                while($dados=mysqli_fetch_assoc($rs)){
                    echo '<option value="'.$dados['idFuncionario'].'">'.$dados['idFuncionario'].' - '. $dados['nomeFuncionario'].'</option>';
                }
                ?></select>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="dtVenda">data da venda</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dtVenda" required>
            </div>
        </div>
        
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>