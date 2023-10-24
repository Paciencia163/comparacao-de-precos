<?php
session_start();
include '../dbconfig.php';
$id=$_REQUEST['cid'];
$q="select * from course where cid=$id";
$re=$conn->query($q);
if($r=$re->fetch_assoc())
{
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
    
     <?php 
       if(isset($_SESSION['course_up']))
       {
           echo $_SESSION['course_up'];
           unset($_SESSION['course_up']);
       }
       ?>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>Actualizar Produtos</h4>
      
<form action="upcoursedata.php" method="post">
                    <table class="table">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                        <tr>
                            <td>Nome da Categoria<br/><input type="text" name="course" class="form-control" value=" <?php echo $r['Category'] ;?> "></td>
                        </tr>
                       
                       <tr><td>Descrição <br><textarea name="about" id="" cols="60" rows="5"><?php echo $r['About']; ?></textarea></td></tr>
                      
                        <tr>
                            <td><input type="submit" value="Actualizar Produto" class="btn btn-success"/></td>
                        </tr>
                    </table>
                </form>

           
          </div>
          <div class="col-md-6">
            <div class="clearfix"></div>
            <aside class="right-sidebar">
              

              <div class="widget">
                <h5 class="widgetheading">Actualizar o Logo do produto<span></span></h5>

                <div class="form-row">
          <div class="form-group col-md-6">
               <img src="../img/<?php echo $r['imglink'];?>" height="100px" width="100px" alt="no">
            </div>
            <form action="updatepic.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
            <div class="form-group col-md-12">
                <label>Choose Related Picture</label>
                <input type="file" name="pic" class="form-control" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <button type="submit" class="btn btn-success btn-md">Actualizar Foto</button>
          </div>
      </form>

        </div>

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
<?php
}
else
{
    echo "Sorry Data not found.";
}
?>
