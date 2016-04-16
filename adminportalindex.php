<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

<?php

session_start();

if($_SESSION['username']) {

}

else{ 

header("location:index.php"); 

}

?>

	<div class="header">

		<div>

			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<br/>

			<ul>

				<li class="selected">

					<a href="adminportalindex.php"><span>P</span>rofile Summary</a>

				</li>

				<li>

					<a href="adminportalstudent.php"><span>S</span>tudents</a>

				</li>

				<li>

					<a href="adminportalcommunity.php"><span>C</span>ommunity</a>

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

							include 'config-faculty.php';

							$username = $_SESSION['username'];

							$usertable = "$username" . "_sbsn";

							$query1 = mysql_query("Select fname, lname, mname FROM $usertable");

							while($result1 = mysql_fetch_array($query1))

							{

							Print "<h2>".$result1['lname'] .", ".$result1['fname'] ." " .$result1['mname']."</h2>";

							}

							Print "<p>Profile Summary</p>";

							Print "<ul>";

							

							$query = mysql_query("SELECT * from $usertable") ;

							while($result = mysql_fetch_array($query)) 

							{ 

								Print "<li><p>Advisory Class: " .$result['section'] . "</p></li>"; 

								Print "<li><p>Address: ".$result['address'] . "</p></li>"; 

								Print "<li><p>Zip Code: " .$result['zip_code'] . "</p></li>"; 

								Print "<li><p>Phone Number: ".$result['phone_number'] . "</p></li>";

								Print "<li><p>Cell Number: " .$result['cell_number'] . "</p></li>"; 

								Print "<li><p>First Name: " .$result['fname'] . "</p></li>"; 

								Print "<li><p>Last Name: ".$result['lname'] . "</p></li>";

								Print "<li><p>Middle Name: " .$result['mname'] . "</p></li>"; 

								Print "<li><p>Email: " .$result['email'] ."</p></li>";

								$_SESSION['subject'] = $result['subject'];

							}

							?>

							</ul>

							</div>

						<div>						

						<ul>

								<li>

									<div>

										<form action="adminportalindex.php"name="ann" method="POST">

										<br/>

											<span>Post Announcement to the Entire School</span><br/>

											<textarea name="message" id="message" cols="33" rows="15"></textarea> 

											<br/> <input type="submit" value="Post"/>

											<li><p><a href="editfacultyinfo.php">Edit personal Info<a/></p></li>

										</form>

										<?php

										if($_SERVER['REQUEST_METHOD'] == 'POST'){

											

												include 'config-subjects.php';

												$message = mysql_real_escape_string($_POST['message']);

												$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

												$today2 = date("Y/m/d", $today);

												$expire = mktime(0,0,0,date("m"),date("d")+90,date("Y"));
												
												$expire2 = date("Y/m/d", $expire);

												$query = mysql_query("INSERT INTO announcement (post_date , main, expire) VALUES ('$today2', '$message', '$expire2')");

												header("location: adminportalcommunity.php");

											

										}

										?>

									</div>

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