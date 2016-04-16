<?php

session_start();

if($_SESSION['admin']) {

include 'config-student.php';

	$username = $_GET['username']; 

	$fname = $_GET['fname']; 

	$mname = $_GET['mname']; 

	$lname = $_GET['lname']; 

	$subject = $_GET['subject']; 

	$_SESSION['subj'] = $subject;

	$query = mysql_query("DELETE FROM students WHERE username='$username'");

	$user = "$username"."_subjects";

	$query = mysql_query("SELECT * from $user");

	while($row = mysql_fetch_assoc($query)){

		$s = $row['subject_name'];

		include 'config-subjects.php';

		$user1 = "$subject"."_"."$username"."_grades";

		mysql_query("DROP TABLE $user1");

		$user1 = "$subject"."_"."$username"."_files";

		mysql_query("DROP TABLE $user1");

		$user1 = "$subject"."_"."$username"."_chat";

		mysql_query("DROP TABLE $user1");

		$t = "$subject"."_student_list";

		include 'config-student.php';

		mysql_query("DELETE FROM $t WHERE username='$username'");

		

	}

	include 'config-faculty.php';

	$query = mysql_query("Select * from subject_list");

	while($row = mysql_fetch_assoc($query)){

		$s = $row['code'];

		$tab = "$s"."_student_list";

		$query = mysql_query("DELETE FROM $tab WHERE username='$username'");

	}

	include 'config-student.php';

	$user = "$username"."_notes";

	mysql_query("DROP TABLE $user");

	$user = "$username"."_sbsn";

	mysql_query("DROP TABLE $user");

	$user = "$username"."_subjects";

	mysql_query("DROP TABLE $user");

	$user = "$username"."_admin";

	mysql_query("DROP TABLE $user");

	$user = "$username"."_dis";

	mysql_query("DROP TABLE $user");

	header("location: annual.php");

}

else

{

header("location:index.php");

}



?>