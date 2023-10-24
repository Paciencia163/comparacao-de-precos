<?php
session_start();
include '../dbconfig.php';
$id=$_REQUEST['subid'];
$q="DELETE FROM `course details` where subid=$id";
$conn->query($q);
header("location:http://localhost/price_compare/admin/index.php");

?>
