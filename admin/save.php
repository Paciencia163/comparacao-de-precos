<?php
session_start();
include '../dbconfig.php';

$tu=$_REQUEST['tutorial'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="../img/";
move_uploaded_file($tmp, $location.$pic);

$sql="INSERT INTO `tutorial`(`name`, `image`) VALUES('$tu','$pic')";

if($conn->query($sql))
{
    $_SESSION['con_save']="<p style='color:green;font-weight:bold;'>Data has successfully Saved.</p>";
}
else {
   $_SESSION['con_save']="<p style='color:red;'>Sorry Tutorial Detail has not saved.</p>"; 
}
header("location:http://localhost/price_compare/admin/tutorial.php");
?>