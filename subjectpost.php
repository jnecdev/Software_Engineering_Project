<?php 
session_start();
$subject = $_SESSION['subject'];
include 'config-subjects.php';
$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$today2 = date("Y/m/d", $today);
$message = mysql_real_escape_string($_POST['myname']);
$tab = "$subject"."_announcement";
$query = mysql_query("INSERT INTO $tab (main, post_date) VALUES ('$message', '$today2')");
header("location: subjectannouncement.php");

?>