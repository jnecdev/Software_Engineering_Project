<?php
session_start();
if($_SESSION['username']){
$subject = $_SESSION['subject'];
include 'config-subjects.php';
	$message = mysql_real_escape_string($_POST['message']);
	$student = $_SESSION['std'];
	$usertable1 ="$subject"."_"."$student"."_chat";
	$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
	$today2 = date("Y/m/d", $today);
	include 'config-faculty.php';
	$faculty = $_SESSION['username'];
	$usertable2 ="$faculty"."_sbsn";
	$query = mysql_query("SELECT * from $usertable2 where subject='$subject'");
	while($result = mysql_fetch_assoc($query)){
		$fname = $result['fname'];
		$lname = $result['lname'];
		$complete = "$fname "."$lname";
	}
	include 'config-subjects.php';
	mysql_query("INSERT INTO $usertable1 (main , post_date, post_by) VALUES ('$message', '$today2', '$complete')");
	header("location: adminsubjectthread.php?number=$student");
}
else{
	header("location: index.php");
}

?>