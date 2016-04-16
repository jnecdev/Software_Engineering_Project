<?php

session_start();

if($_SESSION['admin']) {

include 'config-faculty.php';

	$username = $_GET['username']; 

	$fname = $_GET['fname']; 

	$mname = $_GET['mname']; 

	$lname = $_GET['lname']; 

	$subject = $_GET['subject']; 

	$_SESSION['subj'] = $subject;

	$query = mysql_query("DELETE FROM  `subject_list` WHERE code =  '$subject'");

	$query = mysql_query("DELETE FROM  `class_advisory` WHERE subject =  '$subject'");

	$query = mysql_query("DELETE FROM faculty WHERE username='$username'");

	$use = "$username"."_sbsn";

	mysql_query("DROP TABLE $use");

	include 'config-subjects.php';

	$tab = "$subject"."_announcement";

	mysql_query("DROP TABLE $tab");

	$tab = "$subject"."_shared_files";

	mysql_query("DROP TABLE $tab");

	$tab = "$subject"."_student_list";

	mysql_query("DROP TABLE $tab");

	$tab = "$subject"."_compute";

	mysql_query("DROP TABLE $tab");

	include 'config-student.php';

	$query = mysql_query("Select * from students");

	while($a = mysql_fetch_assoc($query)){

		$username = $a['username'];

		include 'config-subjects.php';

		$user2 = "$subject"."_"."$username"."_grades";

		mysql_query("DROP TABLE $user2");

		$user3 = "$subject"."_"."$username"."_files";

		mysql_query("DROP TABLE $user3");

		$user3 = "$subject"."_"."$username"."_chat";

		mysql_query("DROP TABLE $user3");

		include 'config-student.php';


	}

	include 'config-student.php';

	$quer = mysql_query("Select * from students");

	$u = "";

	$ut = "";

	while($a = mysql_fetch_assoc($quer)){


		$u = $a['username'];

		$ut = "$u"."_subjects";

		mysql_query("DELETE FROM $ut WHERE subject_name='$subject'");

	}

	header("location:adsubjects.php");

}

else

{

header("location:index.php");

}



?>