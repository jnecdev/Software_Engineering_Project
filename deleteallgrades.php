<?php
session_start();
if($_SESSION['username']) {
$subject = $_SESSION['subject'];
$number = $_SESSION['number'];
$usertable ="$subject"."_"."$number" . "_grades"; 	
include 'config-subjects.php';
mysql_query("DELETE FROM $usertable");
header("location: adminportalstudentgrades.php");
}
else{
header("location: index.php");
}
?>