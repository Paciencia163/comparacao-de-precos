<?php
session_start();
include '../dbconfig.php';
$id=$_REQUEST['subid'];
$q="SELECT * FROM `course details` WHERE subid=$id";
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

  <title>Online Shop</title>
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

  <div class="container"><br>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        
          <table class="table table-bordered" style="margin-bottom:50px">
            <tr><h2 align="center">Add Subcourse Form</h2></tr>
             <tr>
              <td colspan="2"> <?php 
       if(isset($_SESSION['final']))
       {
           echo $_SESSION['final'];
           unset($_SESSION['final']);
       }
       ?></td></tr>
       <form method="post" action="final.php">
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <tr>
              <td>Select Tutorial</td>
              <td><select name="tu" id="" class="form-control">
                <?php  $s= $r['tutorial']; 
                $b=mysqli_query($conn,"SELECT `name` FROM tutorial WHERE tid='$s'");
                $abd=mysqli_fetch_row($b);?>
                 <option value="<?php echo $s;?>"><?php echo $abd[0];  ?></option>
          <?php  $res=mysqli_query($conn,"select * from tutorial");
      while($row=mysqli_fetch_array($res)){
        $temp=$row['tid'];
        
        echo "<option value='$temp'>"; echo $row["name"]; echo "</option>";
       

      }

       ?>
              </select></td>
            </tr>
            <tr>
              <td>Enter Link </td>
              <td><input type="url" name="ur" value="<?php echo $r['website']; ?>" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Enter Price </td>
              <td><input type="number" name="price" value="<?php echo $r['price'];?>" class="form-control" required/></td>
            </tr>
            <tr>
              <td>Enter Duration</td>
              <td><input  type="text" name="time" value="<?php echo $r['time duration'];?>" class="form-control" required/></td>
            </tr>
            
            <tr>
              <td>Enter Mentor Name </td>
              <td><input type="text" name="mentor" value="<?php echo $r['t_quali'];?>" class="form-control" required/></td>
            </tr>
             <tr>
              <td>Select Category</td>
              <td><select name="cat" id="" class="form-control">
                <?php  $f= $r['cid']; 
                $ba=mysqli_query($conn,"SELECT `Category` FROM course WHERE cid='$f'");
                $abdt=mysqli_fetch_row($ba);?>
                 <option value="<?php echo $f;?>"><?php echo $abdt[0];  ?></option>
                 
          <?php  $re=mysqli_query($conn,"select * from course");
      while($roww=mysqli_fetch_array($re)){
        $temp=$roww['cid'];
        
        echo "<option value='$temp'>"; echo $roww["Category"]; echo "</option>";
       

      }

       ?>
              </select></td>
            </tr>
            <tr>
                <Td colspan="2" align="center">
                <input type="submit" value="Update" class="btn btn-info" name="save"/>
                
                
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="col-sm-2"></div>
    </div></div>
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

