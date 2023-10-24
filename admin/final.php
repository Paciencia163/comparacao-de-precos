<?php
session_start();
include '../dbconfig.php';

$tu=$_REQUEST['tu'];
$ur=$_REQUEST['ur'];
$price=$_REQUEST['price'];
$time=$_REQUEST['time'];
$mentor=$_REQUEST['mentor'];
$cat=$_REQUEST['cat'];
$id=$_REQUEST['id'];
$q="UPDATE `course details` SET `tutorial`='$tu',`website`='$ur',`price`='$price',`time duration`='$time',`t_quali`='$mentor',`cid`='$cat' WHERE subid='$id'";
// mysqli_query($conn,$q) or die(mysqli_error($conn));
if($conn->query($q))
{
   $_SESSION['final']="<p style='color:green;font-weight:bold;'>Information has successfully updated.</p>";
}
else
{
   $_SESSION['final']="<p style='color:red;'>Sorry Infomration has not updated.</p>";
}
header("location:./update.php?subid=$id");
?>