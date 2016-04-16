<?php session_start();



$username = $_POST['username'];

$password = $_POST['password'];



if($username && $password)

{



		include 'config-student.php';

		$query = mysql_query("SELECT * FROM students WHERE username='$username'");

		$numrows = mysql_num_rows($query);

		if($numrows != 0)

		{

		

			while ($row = mysql_fetch_assoc($query))

				{

		

				$dbusername = $row['username'];

				$dbpassword = $row['password'];

				

				}

				

				if ($username == $dbusername && $password == $dbpassword)

				{

				$_SESSION['studentname'] = $dbusername;

					header("location:portalindex.php");

					

				}

				else

					Print '<script>alert("Incorrect Password!");</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="1; URL=login.php">';

		}

				

		else

		{

			include 'checklogin1.php';
		}

		Print '<script>alert("Username Does not Exist!");</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="1; URL=login.php">';
		

}

else

	die ("Please enter a username and password");



?>