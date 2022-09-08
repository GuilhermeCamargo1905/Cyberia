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

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="?menu=lista-funcionario" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.col-md-6 -->
        </div></div>
        <!-- /.row -->