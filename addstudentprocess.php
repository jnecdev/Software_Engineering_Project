<?php

session_start();

if($_SESSION['admin']) {

	$username = $_GET['username']; 

	$fname = $_GET['fname']; 

	$mname = $_GET['mname']; 

	$lname = $_GET['lname']; 

	$subject = $_GET['subject']; 

	$_SESSION['subj'] = $subject;

	$boo = true;

	include 'config-subjects.php';

	$subj_list = "$subject"."_student_list";

	$query = mysql_query("SELECT * FROM $subj_list");

		while($result = mysql_fetch_array($query)){

		$user = $result['username'];

				if($user == $username){

					Print '<script type="text/javascript">alert("User has been already added!");</script>';

					$boo = false;

					header("location:addstudent.php");

				}

				else{

					continue;

				}

		}

	if($boo == true){

		include 'config-subjects.php';

		$query = mysql_query("INSERT INTO $subj_list (fname , lname, mname, username) VALUES ('$fname', '$lname', '$mname', '$username')");

		$user = "$username"."_subjects";

		include 'config-faculty.php';

		$quek = mysql_query("SELECT * from faculty");

		$username1 = "";

		while($ro = mysql_fetch_assoc($quek)){

		$tempo = $ro['subject'];

			if($tempo == $subject){

				$username1 = $ro['username'];

			}

		}

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

		$query = mysql_query("INSERT INTO $user (subjects , teacher, subject_name) VALUES ('$combi2', '$combi', '$subject')");

		include 'config-subjects.php';

		$user2 = "$subject"."_"."$username"."_grades";

		mysql_query("CREATE TABLE $user2 (`group_id` INT NOT NULL,`group` VARCHAR(50) NOT NULL, `desc` TEXT NOT NULL, `score` FLOAT NOT NULL, `overall` float NOT NULL, `date` DATE NOT NULL, `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT)")or die(mysql_error());

		$user3 = "$subject"."_"."$username"."_files";

		mysql_query("CREATE TABLE $user3 (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `title` VARCHAR(70) NOT NULL, `size` INT NOT NULL, `type` VARCHAR(70) NOT NULL, `file` blob, `message` TEXT NOT NULL, `post_date` DATE NOT NULL)")or die(mysql_error());

		$user4 = "$subject"."_"."$username"."_chat";

		mysql_query("CREATE TABLE $user4 (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `main` TEXT NOT NULL, `post_date` DATE NOT NULL, `post_by` TEXT NOT NULL)")or die(mysql_error());

		Print '<script type="text/javascript">alert("Records Succesfully Added!");</script>';

		header("location:adsubjects2.php");

	}

	else{

		header("location:addstudent.php");

	}

}

else{

	header("location:index.php");

}

?>