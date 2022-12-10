<div class="row">
        <div class="col-lg-3 col-6">

        <h1>
            Lista de Fornecedores
        </h1>
              
            </div>
          <!-- /.col-md-6 -->
        </div></div>
        <!-- /.row -->
        <?php
// Variavel da pesquisa 
$txt_pesquisa = (isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";

?>


<header>
    <h3><i class="bi bi-truck"></i> </h3>
</header>
<div>
    <a class="btn btn-outline-secondary mb-2" href="?menuop=cad-fornecedor"><i class="bi bi-person-plus-fill"></i> Novo fornecedor</a>
</div>
<div>
    <form action="index.php?menuop=lista-fornecedor" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?=$txt_pesquisa?>">
            <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>
        </div>
       
    </form>
</div>
<br>
<div class="tabela ml-3">
<table class="table table-light table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>
                <i class="bi bi-star-fill"></i>
            </th>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Telefone</th>
            <th>Cnpj</th>
            <th>Enderço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $quantidade = 10;
            $pagina = ( isset($_GET['pagina']) ) ?(int)$_GET['pagina']:1;
            $inicio = ($quantidade * $pagina) - $quantidade;

            

            $sql = "SELECT 
            idFornecedor,
            upper(nomeFornecedor) AS nomeFornecedor,
            lower(emailFornecedor) AS emailFornecedor,
            telefoneFornecedor,
            cnpjFornecedor,
            upper(enderecoFornecedor) AS enderecoFornecedor,
            flagFavoritoFornecedor
            FROM tbfornecedor
            WHERE 
            idFornecedor = '{$txt_pesquisa}' or 
            nomeFornecedor LIKE '%{$txt_pesquisa}%' ORDER BY flagFavoritoFornecedor DESC, nomeFornecedor ASC 
            LIMIT $inicio, $quantidade
            
            ";
           //echo $sql;
            $rs = mysqli_query($conexao,$sql) 
            or die("Erro ao executar a consulta! Erro:" . mysqli_error($conexao));

            while($dados = mysqli_fetch_assoc($rs)){

            

        ?>
        <tr>
            <td>
                <?php
                if($dados["flagFavoritoFornecedor"]==1){
                    echo "<a href=\"#\" class=\"flagFavoritoFornecedor link-warning\" title=\"Favorito\" id=\"{$dados["idFornecedor"]}\">
                    <i class=\"bi bi-star-fill\"></i>
                    </a>";
                }else{
                    echo "<a href=\"#\" class=\"flagFavoritoFornecedor link-warning\" title=\"Não Favorito\" id=\"{$dados["idFornecedor"]}\">
                    <i class=\"bi bi-star\"></i>
                    </a>";
                }

                ?>
            </td>
            <td><?=$dados['idFornecedor']?></td>
            <td class="text-nowrap"><?=$dados['nomeFornecedor']?></td>
            <td class="text-nowrap"><?=$dados['emailFornecedor']?></td>
            <td class="text-nowrap"><?=$dados['telefoneFornecedor']?></td>
            <td class="text-nowrap"><?=$dados['cnpjFornecedor']?></td>
            <td class="text-nowrap"><?=$dados['enderecoFornecedor']?></td>
            <td class="text-center">
                <a class="btn btn-outline-warning btn-sm" href="index.php?menuop=editar-fornecedor&idFornecedor=<?=$dados['idFornecedor']?>"><i class="bi bi-pencil-square"></i></a>
                
            </td>
            <td class="text-center">
                <a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluir-fornecedor&idFornecedor=<?=$dados['idFornecedor']?>"><i class="bi bi-trash-fill"></i></a>    
            </td>
            

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

<ul class="pagination justify-content-center">
<?php

        $sqlTotal = "SELECT idFornecedor FROM tbfornecedor";
        $qrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao));
        $numTotal = mysqli_num_rows($qrTotal);

        $totalPagina = ceil($numTotal / $quantidade);

        echo "<li class='page-item'><span class='page-link'>Total de registros: " . $numTotal . " </span></li> ";

        echo '<li class="page-item"><a class="page-link" href="?menuop=lista-fornecedor&pagina=1">Primeira Pagina</a></li>';

        if($pagina>6){
            ?>
            <li class="page-item"><a class="page-link" href="?menuop=lista-fornecedor&pagina=<?php echo $pagina-1?>"><<</a></li>
            <?php
        }


        for($i=1;$i<=$totalPagina;$i++){
            
           if($i>=($pagina-5) && $i <= ($pagina+5)){
            if($i==$pagina){
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=lista-fornecedor&pagina={$i}\"> {$i} </a></li>";

            }
           }
        }

        if($pagina<$totalPagina-5){
            ?>
            <li class="page-item"><a class="page-link" href="?menuop=lista-fornecedor&pagina=<?php echo $pagina+1?>">>></a></li>
            <?php
        }
        echo "<li class='page-item'> <a class='page-link' href=\"?menuop=lista-fornecedor&pagina=$totalPagina\">Ultima Pagina</a></li>";


?>
</ul>
</div>


          <!-- /.col-md-6 -->
        </div></div>
        <!-- /.row -->