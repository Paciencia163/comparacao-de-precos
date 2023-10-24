<?php
session_start();
require('../dbconfig.php');
$admin= $_SESSION['admin'];
if($admin=="")
{header('location:../index.php');}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comparação de Preços</title>
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/business-frontpage.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->
   <div id="wrapper">
    
    

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>Todas Categorias</h4>
      


            <table class="table">
                <tr>
                    <th>Sr.</th><th>Categoria</th><th>Imagem</th><th>Sobre</th><th>Actualizar</th>
                </tr>
                <?php
                $i=1;
                $q="select * from course";
                $re=$conn->query($q);
                while($r=$re->fetch_assoc())
                {
                    ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['Category'];?></td>
                   <td><img src="../img/<?php echo $r['imglink'];?>" height="40px" width="50px" alt="not found"></td>
                   <td><textarea disabled class="form-control"><?php echo $r['About'];?></textarea></td>
                     <td><a href="updateco.php?cid=<?php echo $r['cid'];?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
          </div>
          <div class="col-md-6">
            <div class="clearfix"></div>
            <aside class="right-sidebar">
               <?php 
       if(isset($_SESSION['course_save']))
       {
           echo $_SESSION['course_save'];
           unset($_SESSION['course_save']);
       }
       ?>

              <div class="widget">
                <h5 class="widgetheading">Adicionar Categoria de Produtos<span></span></h5>

                <form action="savecourse.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Digite o nome da Categoria<br/><input type="text" name="course" class="form-control" required="required"/></td>
                        </tr>
                       <tr>
                         <td>Selecione o Logo da categoria<br/><input type="file" name="pic" class="form-control" required="required"></td>
                       </tr>
                       <tr><td>Descrição <br><textarea name="about" id="" cols="60" rows="8"></textarea></td></tr>
                      
                        <tr>
                            <td><input type="submit" value="Salvar categoria" class="btn btn-success"/></td>
                        </tr>
                    </table>
                </form>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  <!-- Footer -->
  <?php include("../footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
