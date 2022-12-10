<?php
$idVenda = $_GET['idVenda'];
$sql = "SELECT * FROM tbvendas WHERE idVenda = '{$idVenda}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3><i class="bi bi-person-square"></i> Editar Vendas</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-venda" method="post">
    <div class="mb-3">
            <label class="form-label" for="idVenda">ID Venda</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idVenda" value = " <?= $dados["idVenda"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="idFuncionario">Funcionario</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="idFuncionario" value = " <?= $dados["idFuncionario"]?>" required>
                <div class="valid-feedback">
                    Está correto.
                </div>
                <div class="invalid-feedback">
                   Campo obrigatório de no máximo 255 caracteres 
                </div>
            </div>
        </div>
        
        <div class="mb-3 col-3">
            <label class="form-label" for="dtVenda">Data da Venda</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dtVenda" value = "<?=$dados["dtVenda"]?>" required>
            </div>
        </div>
        </div>
        
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>

    <h3> Itens Vendidos</h3>
    <div>
        <form action="?menuop=editar-venda&idVenda=<?=$dados["idVenda"]?> " method="post">
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
            <div>
                <input type="number" name="qtdProduto">
            </div>
        </div>
        <div>
            <button class= "btn btn-success" type = "submit">Add</button>
        </div>
        </form>
    </div>
    <div class= "box-itens">
    <div class="tabela ml-3">
<table class="table table-light table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Valor Unitário</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
       
       
       <?php

            //insere produto
            if(isset($_POST["idProduto"])){
                $idProduto = $_POST["idProduto"];
                $qtdProduto = $_POST["qtdProduto"];
            }
            else{
                $idProduto= "";
                $qtdProduto= "";
            }
            $sql = "SELECT * FROM tbestoque WHERE idProduto = $idProduto and qtdProduto >= $qtdProduto";
            $rs = mysqli_query($conexao,$sql);
            


            $sql = "SELECT 
            iv.idProduto,
            p.nomeProduto,
            e.valorDeVenda,
            iv.qtdProduto,
            e.valorDeVenda * iv.qtdProduto as valorTotal
            FROM tbitensvendidos as iv inner join tbprodutos as p on iv.idProduto = p.idProduto inner join tbestoque as e on p.idProduto = e.idProduto WHERE idVenda = $idVenda";
            
            $rs = mysqli_query($conexao,$sql);
            while($dados = mysqli_fetch_assoc($rs)){
                
            
        ?>
        <tr>
            <td><?=$dados['idProduto']?></td>
            <td><?=$dados['nomeProduto']?></td>
            <td><?=$dados['valorDeVenda']?></td>
            <td><?=$dados['qtdProduto']?></td>
            <td><?=$dados['valorTotal']?></td>

        </tr>
        <?php
            }
        ?>
         </tbody>
        </table>
        </div>
    </div>
</div>