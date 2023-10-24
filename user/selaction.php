<?php 
session_start();
require("../dbconfig.php");
$id=$_REQUEST['id'];
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
<style>

  tr:nth-child(2) { background: #90ee90; };

  
</style>
</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>

<div class="container"><br>
	<h1 align="center"><u>Preços comparado do  <?php $sql="select Category from course where cid='$id'";
	$a=$conn->query($sql);
	$abd=mysqli_fetch_row($a);
                echo $abd[0]; ?> Produto da Cesta Básica</u></h1><br><br>

<table class="table table-bordered">
	
	
<tr>		
<th>S.No</th>
<th>Loja</th>
<th>Preço</th>
<th>Duração</th>
<th>Dicas</th>
<th>Click para  ir</th>
</tr>
	
	
<?php
$q="SELECT * FROM `course details` WHERE cid='$id' order by price";
$re=$conn->query($q);
$i=1;
while($r=$re->fetch_assoc())
{

?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php 
     $a=$r['tutorial'];
     $b=mysqli_query($conn,"SELECT name,image FROM tutorial WHERE tid='$a'");
                $abd=mysqli_fetch_row($b);
                echo $abd[0];?>&nbsp;<img src="../img/<?php echo $abd[1] ?>" height="70px" width="70px" alt="not found"></td>
		<td>&#8377;<?php echo $r['price']; ?> Kzs</td>
		<td><?php echo $r['time duration'] ;?> Hr</td>
		<td><?php echo $r['t_quali']; ?></td>
    <td><a href="<?php echo $r['website']; ?>" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;Go</a></td>
	</tr>
<?php $i++;
} ?>	
	
</table>
<span><b>Cor que representa o preço Minimo: </b>
<input type="color" value="#90ee90" disabled>
</span>
</div>
<br><br><br><br><br>
 <?php include("../footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


    
