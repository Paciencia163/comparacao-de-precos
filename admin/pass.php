<?php
session_start();
require('../dbconfig.php');
$admin= $_SESSION['admin'];
if($admin=="")
{header('location:../index.php');}
extract($_POST);
if(isset($update_password))
{
    
    $que=mysqli_query($conn,"select password from admin");
    $row=mysqli_fetch_array($que);
    $pass=$row['password'];
    if($op!=$pass)
        {
        $err="<font color='red'>You Enterd wrong old password</font>";
        }
        
    elseif($np!=$cp)
        {
        $err="<font color='red'>New Password and confirm password must be same</font>";
        }
    else
    {
        mysqli_query($conn,"update admin set password='$cp'");
        $err="<font color='green'>Password have been Changed successfully !!</font>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comparação de preços</title>
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
  <div class="container">
    
    <div class="col-md-6">
 <form method="post">

<table class="table">
<tr>
     <th><?php echo @$err; ?></th>
</tr>
    
<tr>
    <th>Senha Antiga:  
    <input type="password" name="op" value="" placeholder="Digite sua senha Antiga" class="form-control" required/></th>
</tr>
    
<tr>
    <th>Nova Senha:
    <input type="password" name="np" value="" placeholder="Digite sua senha Nova" class="form-control"  required/><br /></th>
</tr>
 
<tr>
    <th>Confirma a Senha:
    <input type="password" name="cp" value=""  placeholder="Re-confirme a sua Senha" class="form-control" required/><br /></th>
</tr>
<tr>
    <th rowspan="2"><input type="submit" value="Actualizar Senha" name="update_passwd" class="btn btn-info"/></th>
</tr>
</table>
</form>
</div>
<div class="col-md-3"></div>


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
