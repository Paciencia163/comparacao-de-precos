<?php
session_start();
include '../dbconfig.php';
$id=$_REQUEST['tid'];
$q="DELETE FROM `tutorial` where tid=$id";
$conn->query($q);
header("location:http://localhost/price_compare/admin/tutorial.php");

?>
