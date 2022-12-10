<?php
include("db/conexao.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cyberia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- barra de navegação-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Links lado esquerdo da barra de navegação -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">ínicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li>
    </ul>

    <!-- Links lado direito de navegação -->
    <ul class="navbar-nav ml-auto">
      <!-- barra de navegação de pesquisa -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Menu de mensagens -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Inicio Mensagens -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Me ligue quando poder...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atras</p>
              </div>
            </div>
            <!-- Fim das Mensagens -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Incio -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Recebi sua mensagem</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atras</p>
              </div>
            </div>
            <!-- Fim -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Inicio -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">O assunto vai aqui</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas Atras</p>
              </div>
            </div>
            <!-- Fim -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens</a>
        </div>
      </li>
      <!-- Menu de Notificações -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notificações</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 novas mensagens
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 pedidos de amizade
            <span class="float-right text-muted text-sm">12 horas</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 Relatórios
            <span class="float-right text-muted text-sm">2 dias</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver Todas as Notificações</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.barra de navegação -->

  <!-- Barra Lateral -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!--  Logo -->
    <a href="index3.html" class="brand-link">
      <img   class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cyberia</span>
    </a>

    <!-- Barra lateral -->
    <div class="sidebar">
      <!-- painel do usuario da barra lateral  -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Guilherme Camargo</a>
        </div>
      </div>

      <!-- Forma de pesquisa menu lateral -->
      

      <!-- Barra menu lateral-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Menu lateral -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            
              <p>
                <i class="right fas fa-angle-left"></i>
                Cadastro
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?menuop=lista-funcionario" class="nav-link">
                  <i class="bi bi-person-video"></i>
                  <p> Funcionarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?menuop=lista-fornecedor" class="nav-link">
                  <i class="bi bi-truck"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            <ion-icon name="bar-chart-outline"></ion-icon>
              <p>
                Finanças
                <i class="right fas fa-angle-left"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?menuop=vendas" class="nav-link">
                  <i class="bi bi-cart"></i>
                  <p>Vendas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?menuop=produtos" class="nav-link">
                  <i class="bi bi-box-seam"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?menuop=itens-vendidos" class="nav-link">
                  <i class="bi bi-cart-check"></i>
                  <p>Itens Vendidos</p>
                </a>
              </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            <ion-icon name="bar-chart-outline"></ion-icon>
              <p>
                Estoque
                <i class="right fas fa-angle-left"></i>

              </p>
            </a>
            <li class="nav-item">
                <a href="?menuop=estoque" class="nav-link">
                  <!-- icone <i class="bi bi-cart-check"></i> -->
                  <p>Meu Estoque</p>
                </a>
              </li>
              </ul>
          
        </ul>
      </nav>
      <!-- /menu lateral -->
    </div>
    <!-- menu lateral -->
  </aside>

  <!-- Conteúdo da pagina -->
  <div class="content-wrapper">
    <!-- Conteúdo do cabeçalho da pagina-->
    <div class="content-header">
    <?php
      include("barra-titulo-nav.php");
        

    ?>
    </div>
    <!-- /.conteudo cabeçalho -->

    <!-- Conteudo principal -->
    <div class="content">
      <div class="container-fluid">

    <?php 
if(isset($_GET["menuop"])){
  $menu=$_GET["menuop"];

}else{
  $menu = "home";
}


      switch($menu){
        case "home":
          include("home.php");
        break;
        case "lista-funcionario":
          include("lista-funcionario.php");
        break;
        case "cad-funcionario":
          include("cad-funcionario.php");
        break;
        case "inserir-funcionario":
          include("inserir-funcionario.php");
        break;
        case "lista-fornecedor":
          include("lista-fornecedor.php");
        break;
        case "cad-fornecedor":
          include("cad-fornecedor.php");
        break;
        case "inserir-fornecedor":
          include("inserir-fornecedor.php");
        break;
        case "editar-fornecedor":
          include("editar-fornecedor.php");
        break;
        case "excluir-fornecedor":
          include("excluir-fornecedor.php");
        break;
        case "editar-funcionario":
          include("editar-funcionario.php");
        break;
        case "atualizar-funcionario":
          include("atualizar-funcionario.php");
        break;
        case "excluir-funcionario":
          include("excluir-funcionario.php");
        break;
        case "vendas":
          include("vendas.php");
        break;
        case "produtos":
          include("produtos.php");
        break;
        case "cad-produto":
          include("cad-produto.php");
        break;
        case "inserir-produto":
          include("inserir-produto.php");
        break;
        case "editar-produto":
          include("editar-produto.php");
        break;
        case "atualizar-produto":
          include("atualizar-produto.php");
        break;
        case "excluir-produto":
          include("excluir-produto.php");
        break;
        case "itens-vendidos":
          include("itens-vendidos.php");
        break;
        case "cad-venda":
          include("cad-venda.php");
        break;
        case "inserir-venda":
          include("inserir-venda.php");
        break;
        case "editar-venda":
          include("editar-venda.php");
        break;
        case "atualizar-venda":
          include("atualizar-venda.php");
        break;
        case "excluir-venda":
          include("excluir-venda.php");
        break;
        case "estoque":
          include("estoque.php");
        break;
        case "cad-estoque":
          include("cad-estoque.php");
        break;
        case "inserir-estoque":
          include("inserir-estoque.php");
        break;
        case "editar-estoque":
          include("editar-estoque.php");
        break;
        case "atualizar-estoque":
          include("atualizar-estoque.php");
        break;
        case "excluir-estoque":
          include("excluir-estoque.php");
        break;

        
      }
      
    ?>





      </div><!-- /.fim do container fluid -->
    </div>
    <!-- /.conteudo -->
  </div>
  

  <!-- Controle barra lateral -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Controle barra lateral -->
    <div class="p-3">
      <h5>Rotina</h5>
      <p>Atividades Diarias</p>
    </div>
  </aside>
  <!-- fim controle da barra lateral -->

  <!-- Rodapé -->
  <footer class="main-footer">
    <!-- Para a direita -->
    <div class="float-right d-none d-sm-inline">
      Cyberia
    </div>
    <!-- Para a esquerda -->
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Cyberia</a>.</strong> Todos os direitos reservados.
  </footer>
</div>


<!-- Scripts -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
