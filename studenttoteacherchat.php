<?php
session_start();
if($_SESSION['studentname']){
$subject = $_SESSION['subject'];
include 'config-subjects.php';
	$message = mysql_real_escape_string($_POST['message']);
	$student = $_SESSION['studentname'];
	$subject = $_SESSION['subject'];
	$usertable ="$subject"."_"."$student"."_chat";
	$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
	$today2 = date("Y/m/d", $today);
	include 'config-student.php';
	$query = mysql_query("SELECT * from students where username='$student'");
	while($result = mysql_fetch_assoc($query)){
		$fname = $result['fname'];
		$lname = $result['lname'];
		$complete = "$fname "."$lname";
	}
	include 'config-subjects.php';
	mysql_query("INSERT INTO $usertable (main , post_date, post_by) VALUES ('$message', '$today2', '$complete')");
	header("location: subjectthread.php");
}
else{
	header("location: index.php");
}

?>