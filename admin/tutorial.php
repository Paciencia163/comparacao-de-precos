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
            <h4>Todas Lojas</h4>
      


            <table class="table">
                <tr>
                    <th>Sr.</th><th>Nome</th><th>Imagem</th><th>Deletar</th>
                </tr>
                <?php
                $i=1;
                $q="select * from tutorial";
                $re=$conn->query($q);
                while($r=$re->fetch_assoc())
                {
                    ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['name'];?></td>
                    <td><img src="../img/<?php echo $r['image'];?>" height="40px" width="50px" alt="not found"></td>
                   
                    
                    <td><a href="deltutorial.php?tid=<?php echo $r['tid'];?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
       if(isset($_SESSION['con_save']))
       {
           echo $_SESSION['con_save'];
           unset($_SESSION['con_save']);
       }
       ?>

              <div class="widget">
                <h5 class="widgetheading">Adicione Nova Loja ou Cantina<span></span></h5>

                <form action="save.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Digite o Nome da Loja<br/><input type="text" name="tutorial" class="form-control" required="required"/></td>
                        </tr>
                       <tr>
                         <td>Selecione o Logo da Loja<br/><input type="file" name="pic" class="form-control" required="required"></td>
                       </tr>
                        <tr>
                            <td><input type="submit" value="Save Tutorial" class="btn btn-success"/></td>
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
