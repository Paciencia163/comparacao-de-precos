<?php
session_start();
require('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where username='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comparação de Preços - Lubango</title>
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->
  <div class="container"><br>
    <div class="row">
      <div class="col-md-6">
        <form method="post" action="selaction.php">
        <label for="">Selecione o produto a pesquisar</label>
        <select name="id" id="course">
          <option value="">Selecione</option>
          <?php  $res=mysqli_query($conn,"select * from course");
      while($row=mysqli_fetch_array($res)){
        $temp=$row['cid'];
        
        echo "<option value='$temp'>"; echo $row["Category"]; echo "</option>";
       

      }

       ?>
       
        </select>
        <button type="submit" class="btn btn-info" name="save">Pesquisar</button>
      </form>
      </div>
    </div><br>
    <div class="row">
    <?php $q="select * from course";
$re=$conn->query($q);
while($r=$re->fetch_assoc())
{ ?>
    
       <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="../img/<?php echo $r['imglink'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $r['Category'] ?> Produtos</h4>
            <p class="card-text"><?php echo $r['About'] ?></p>
          </div>
          <div class="card-footer">
            <a href="selaction.php?id=<?php echo $r['cid'] ?>" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
    
  <?php }; ?>
  </div>
  </div>

  <!-- Footer -->
  <?php include("../footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
