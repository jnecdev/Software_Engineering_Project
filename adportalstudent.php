<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style-admin3.css" type="text/css">

</head>

<body>

<?php

session_start();

if($_SESSION['admin']) {

}

else{ header("location:index.php"); }

?>

<?php 

$number = $_GET['number']; 

$fname = $_GET['fname']; 

$lname = $_GET['lname']; 

$mname = $_GET['mname']; 

$_SESSION['number'] = $number;

$student = $_SESSION['number'];

?>

	<div class="header">

		<div>

			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<br/>

			<ul>

				<li class="selected">

					<a href="adportalindex.php"><span>S</span>tudents</a>	

				</li>

				<li>

					<a href="adsubjects.php"><span>S</span>ubjects</a>

				</li>

				<li>

					<a href="adothers.php"><span>O</span>ther Records</a>

				</li>

				<li>

					<a href="adportalcommunity.php"><span>C</span>ommunity</a>

				</li>

				<li>

					<a href="Logout.php"><span>L</span>og out</a>

				</li>

			</ul>

			<div>

			</div>

		</div>

	</div>

	<div class="body">

		<div>

			<div>

				<div>

					<div>

						<div class="section">

						<?php

							Print "<h2>$lname, $fname $mname</h2>";

						?>

							<ul>

							<div class="stud-tabs"><a href="stud-profile.php">Profile</a><a href="stud-subjs.php">Subject/Grades</a><a href="disc-recs.php">Disciplinary Records</a></div>
							<br/>
							<p>Student Page<br/>
							
							<?php

							include 'config-student.php';

							$usertable = "$student"."_sbsn";

							$query = mysql_query("SELECT * from $usertable");

							while($result = mysql_fetch_assoc($query))

							{

								Print "<li><p>Section: " .$result['section'] . "</p></li>"; 

								Print "<li><p>Address: ".$result['address'] . "</p></li>"; 

								Print "<li><p>Zip Code: " .$result['zip_code'] . "</p></li>"; 

								Print "<li><p>Phone Number: ".$result['phone_number'] . "</p></li>";

								Print "<li><p>Cell Number: " .$result['cell_number'] . "</p></li>"; 

								Print "<li><p>First Name: " .$result['fname'] . "</p></li>"; 

								Print "<li><p>Last Name: ".$result['lname'] . "</p></li>";

								Print "<li><p>Middle Name: " .$result['mname'] . "</p></li>"; 

								Print "<li><p>Date Enrolled: " .$result['enroll_date'] ."</p></li>";

								Print "<li><p>Contact Person's Number: " .$result['emergency'] ."</p></li>";

								Print "<li><p>Nationality: " .$result['nationality'] ."</p></li>";

								Print "<li><p>Religion: " .$result['religion'] ."</p></li>";

								Print "<li><p>Address: " .$result['address'] ."</p></li>";

							}

							

							?>

								<li>

									<p><?php Print '<a href="adstudenteditinfo.php?number='.$number.'">'; ?>Edit personal Info<a/></p>

								</li>

							</ul>

						</div>



					</div>

				</div>

			</div>

		</div>

	</div>



</body>

</html>