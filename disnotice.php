<?php
session_start();
include 'config-student.php';

$message = mysql_real_escape_string($_POST['message']);
$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$today2 = date("Y/m/d", $today);
$name = $_SESSION['n'];
$table = "$name"."_admin";

mysql_query("INSERT INTO $table (post_date, main) VALUES('$today2','$message')");
$num = $_SESSION['n'];
header("location: adstudentdis.php?token_id=923482734030958273840123048173209417324019857389201&number=".$num."&lname=&mname=&fname");
?>