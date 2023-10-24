<?php
session_start();
include '../dbconfig.php';

$course=$_REQUEST['course'];
$about=$_REQUEST['about'];
$id=$_REQUEST['id'];
$q="UPDATE `course` SET `Category`='$course',`About`='$about' WHERE cid='$id'";
// mysqli_query($conn,$q) or die(mysqli_error($conn));
if($conn->query($q))
{
   $_SESSION['course_up']="<p style='color:green;font-weight:bold;'>Information has successfully updated.</p>";
}
else
{
   $_SESSION['course_up']="<p style='color:red;'>Sorry Infomration has not updated.</p>";
}
header("location:./updateco.php?cid=$id");
?>