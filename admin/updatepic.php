<?php
session_start();
include '../dbconfig.php';
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$location="../img/";
move_uploaded_file($tmp, $location.$pic);
$id=$_REQUEST['id'];
//echo "Pic $pic and tmp : $tmp";
$q="UPDATE `course` SET `imglink`='$pic' where cid='$id'";

if($conn->query($q))
{
  header("location:./updateco.php?cid=$id");  
}
else
{
   echo "Sorry Image not changed." ;
}
?>