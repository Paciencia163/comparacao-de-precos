<?php
require('dbconfig.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where username='$user'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{

//encrypt your password
$pass=md5($pass);


$query="INSERT INTO `user`(`username`, `password`, `name`, `email`, `mobile`, `duration`) VALUES ('$user','$pass','$n','$e','$mob',now())";
mysqli_query($conn,$query);

$err="<font color='blue'><h3 align='center'>Registration successfull Please Login to proceed in login section !!<h3></font>";
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
    <div class="container"><br>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <form method="post" enctype="multipart/form-data">
          <table class="table table-bordered" style="margin-bottom:50px">
            <tr><h2 align="center">Registration Form</h2></tr>
            <tr>
              <td colspan="2"><?php echo @$err;?></td>
            </tr>
            
            <tr>
              <td>Enter Your name</td>
              <td><input  type="text" name="n" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Enter Your email </td>
              <td><input type="email" name="e" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Enter Your Mobile </td>
              <td><input type="text" name="mob" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Enter Your Username</td>
              <td><input  type="text" name="user" class="form-control" required/></td>
            </tr>
            
            <tr>
              <td>Enter Your Password </td>
              <td><input type="password" name="pass" class="form-control" required/></td>
            </tr>
            <tr>
                <Td colspan="2" align="center">
                <input type="submit" value="Save" class="btn btn-info" name="save"/>
                <input type="reset" value="Reset" class="btn btn-info"/>
                
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div></div>
    <!-- Footer -->
    <?php include("footer.php") ?>
    <!-- /footer -->
    <!-- /.container -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>