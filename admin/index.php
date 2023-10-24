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

  <title>Comparação de Preço</title>
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
          <div class="col-md-12">
            <h4 style="display: inline;">Produtos Disponiveis</h4>&nbsp;&nbsp;&nbsp;<a  href="add.php"><button class="btn btn-info">Adicionar novo</button></a>
       <?php 
       if(isset($_SESSION['ts']))
       {
           echo $_SESSION['ts'];
           unset($_SESSION['ts']);
       }
       ?>


            <table class="table">
                <tr>
                    <th>Sr.</th><th>Loja</th><th>link</th><th>Preço</th><th>Duração</th><th>Dicas</th><th>Categoria</th><th>Actualizar</th><th>Delectar</th>
                </tr>
                <?php
                $i=1;
                $q="SELECT * FROM `course details`";
                $re=$conn->query($q);
                while($r=$re->fetch_assoc())
                {
                    ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $a=$r['tutorial'];
                    $b=mysqli_query($conn,"SELECT name FROM tutorial WHERE tid='$a'");
                $abd=mysqli_fetch_row($b);
                echo $abd[0];?></td>
                    <td><?php echo $r['website'];?></td>
                    <td>&#8377;<?php echo $r['price'];?></td>
                    <td><?php echo $r['time duration']; ?></td>
                    <td><?php echo $r['t_quali'] ?></td>
                    <td><?php $s=$r['cid'];
                    $p=mysqli_query($conn,"SELECT Category FROM course WHERE cid='$s'");
                $abs=mysqli_fetch_row($p);
                echo $abs[0]; ?></td>
                    <td><a href="update.php?subid=<?php echo $r['subid'];?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletesub.php?subid=<?php echo $r['subid'];?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
          </div>
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
