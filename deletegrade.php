<?php
session_start();
if($_SESSION['username']) {
$subject = $_SESSION['subject'];
$desc = $_GET['desc']; 
$date = $_GET['date']; 
$id = $_GET['id'];
$number = $_SESSION['number'];
$usertable ="$subject"."_"."$number" . "_grades"; 	
include 'config-subjects.php';
$l = mysql_query("DELETE FROM $usertable WHERE id='$id'");
header("location: adminportalstudentgrades.php");
}
else{
header("location: index.php");
}
?>