<?php
session_start(); 
if($_SESSION['admin']) {
	$username = $_GET['username']; 
	$fname = $_GET['fname']; 
	$mname = $_GET['mname']; 
	$lname = $_GET['lname']; 
	$subject = $_GET['subject']; 
	$_SESSION['subj'] = $subject;
	include 'config-subjects.php';
	$t = "$subject"."_student_list";
	$query = mysql_query("DELETE FROM $t WHERE fname='$fname' AND username='$username'");
	$user = "$username"."_subjects";
		include 'config-faculty.php';
		$username1 = $_SESSION['username'];
		$usertable = "$username1" . "_sbsn";
		$first = "";
		$last = "";
		$middle = "";
		$subj_desc = "";
		$query = mysql_query("SELECT fname, mname, lname, subject_desc FROM $usertable");
							while($result = mysql_fetch_array($query)) 
							{ 
								$first = $result['fname']; 
								$last = $result['lname'];
								$middle = $result['mname']; 
								$subj_desc = $result['subject_desc']; 
							}
		include 'config-student.php';
		$combi = "$first"." " ."$middle". " "."$last";
		$combi2 = "$subject".": "."$subj_desc";
		$query = mysql_query("DELETE FROM $user WHERE subject_name='$subject'");
		include 'config-subjects.php';
		$user2 = "$subject"."_"."$username"."_grades";
		mysql_query("DROP TABLE $user2")or die(mysql_error());
		$user3 = "$subject"."_"."$username"."_files";
		mysql_query("DROP TABLE $user3")or die(mysql_error());
		$user3 = "$subject"."_"."$username"."_chat";
		mysql_query("DROP TABLE $user3")or die(mysql_error());
		Print '<script type="text/javascript">alert("Records Succesfully Deleted!");</script>';
		header("location:adsubjects2.php?dbname="."$subject");
	
	}
else{
	header("location:index.php");
}
?>