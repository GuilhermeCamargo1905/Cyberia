<div class="row">
        <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
          <?php
          $sql="SELECT * FROM tbfuncionarios";
          $rs=mysqli_query($conexao,$sql);
          $dados=mysqli_num_rows($rs);
          ?>    
        
        
          <div class="inner">
                <h3><?=$dados?></h3>

                <p>Funcionarios</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="?menuop=lista-funcionario" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.col-md-6 -->
        </div></div>
        <!-- /.row -->

<div class="row">
        <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
          <?php
          $sql="SELECT * FROM tbfornecedor";
          $rs=mysqli_query($conexao,$sql);
          $dados=mysqli_num_rows($rs);
          ?>    
<div class="inner">
                <h3><?=$dados?></h3>

                <p>Fornecedores</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="?menuop=lista-fornecedor" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.col-md-6 -->
        </div></div>
        <!-- /.row -->

        <div class="row">
        <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
          <?php
          $sql="SELECT * FROM tbvendas";
          $rs=mysqli_query($conexao,$sql);
          $dados=mysqli_num_rows($rs);
          ?>    
<div class="inner">
                <h3><?=$dados?></h3>

                <p>Vendas</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="?menuop=vendas" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.col-md-6 -->
        </div></div>

        <div class="row">
        <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
          <?php
          $sql="SELECT * FROM tbprodutos";
          $rs=mysqli_query($conexao,$sql);
          $dados=mysqli_num_rows($rs);
          ?>    
<div class="inner">
                <h3><?=$dados?></h3>

                <p>Produtos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="?menuop=produtos" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.col-md-6 -->
        </div></div>
        
       
        
        <!---<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([

        
        ["Element", "Density", { role: "style" } ],


       <?php 
        
        $sql = "SELECT FROM "

        ?>

        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "left" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
              
</div>-->

          