<?php session_start();



$username = $_POST['username'];

$password = $_POST['password'];



if($username && $password)

{



		include 'config-faculty.php';

		$query = mysql_query("SELECT * FROM faculty WHERE username='$username'");

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

				$_SESSION['username'] = $dbusername;

					header("location:adminportalindex.php");

					

				}

				else{

					Print '<script>alert("Incorrect Password!");</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="1; URL=facultylogin.php">';
				}

		}

				

		else{

			$query = mysql_query("SELECT * FROM admin WHERE username='$username'");

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

				$_SESSION['admin'] = $dbusername;

					header("location:adportalindex.php");

					

				}

			die ("Username doesn't exist");		
			Print '<a href="facultylogin.php">Click here to go back</a>';

		}
	}

}
else{

	Print '<script>alert("Incorrect Password!");</script>';
	echo '<META HTTP-EQUIV="Refresh" Content="1; URL=facultylogin.php">';
}

?>