<?php
session_start();
include 'config-student.php';

$subj = mysql_real_escape_string($_POST['subject']);
$desc = mysql_real_escape_string($_POST['desc']);
$date = mysql_real_escape_string($_POST['date']);
$num = $_SESSION['n'];
$table = "$num"."_dis";
mysql_query("INSERT INTO $table (post_date, subject, main) VALUES('$date','$subj','$desc')");
header("location: adstudentdis.php?token_id=923482734030958273840123048173209417324019857389201&number=".$num."&lname=&mname=&fname");
?>