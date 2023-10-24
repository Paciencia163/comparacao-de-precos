<?php
session_start();
require('dbconfig.php');
extract($_POST);
if(isset($save))
{

  

$sql=mysqli_query($conn,"select * from admin where username='$user' and password='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['admin']=$user;
header('location:admin');
}

else
{

$err="<font color='red'>Invalid login details</font>";

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

  <title>Online Shop</title>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->
    <div class="container"><br><br><br><br>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Login</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="user" type="text" autofocus required placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                
                                
                <div class="form-group">
                                    <input name="save" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
                
                <div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
                
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
<br><br><br>
  <?php include("footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
