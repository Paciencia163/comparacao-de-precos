<?php
session_start();
include '../dbconfig.php';

$co=$_REQUEST['course'];
$ab=$_REQUEST['about'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="../img/";
move_uploaded_file($tmp, $location.$pic);

$sql="INSERT INTO `course`(`Category`, `imglink`, `About`) VALUES('$co','$pic','$ab') ";

if($conn->query($sql))
{
    $_SESSION['course_save']="<p style='color:green;font-weight:bold;'>Data has successfully Saved.</p>";
}
else {
   $_SESSION['course_save']="<p style='color:red;'>Sorry Course Detail has not saved.</p>"; 
}
header("location:http://localhost/price_compare/admin/course.php");
?>