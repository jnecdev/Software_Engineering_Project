<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style-admin.css" type="text/css">

</head>

<body>

<?php

session_start();

if($_SESSION['admin']) {

}

else{ 

header("location:index.php"); 

}

?>

	<div class="header">

		<div>

			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<!--<p id="schoolname" >

			Maria Montessori School of Quezon City

			</p>--><br/>

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

							Print "<h2>Administrators</h2>";

							Print "<br/>";

							

						?>

						<?php

							Print "<ul>";

							Print "<li>";

							Print "</li>";

							include 'config-faculty.php';

							$username = $_GET['username'];

							$fname = $_GET['fname'];

							$mname = $_GET['mname'];

							$lname = $_GET['lname'];
							
							Print "<p>Are you sure you want to delete this administrator account?</p><br/>";

							Print "$username ($lname, $fname $mname)<br/>";

							Print '<a href="totaladmindelete.php?token_id=09ds7f0sd8dkfjxae9fxdugs9d8f7s9d8xf7sd98g7csd98fg77f9823iy8rcmwexfjweriguwoasfjdcmre98utc5w3fjrmffwjimeorfww1w0r1u203r19320r2x85t45yerw02&username='.$username.'&lname='.$lname.'&fname='.$fname.'&mname='.$mname.'" onClick="succ()">Confirm Account Deletion</a>';	

							?>

							</ul>

							</div>

						<div>						

						<ul>

						<ul>

								<li>

								<div>

										<a href="annual.php" align="center"><span>Delete Annual Student Records</span></a>

								</div>

								</li>

								<li>

									<div>

										<a href="adminregister.php" align="center"><span>Create Another Admin Account</span></a>

									</div>

								</li>

								<li>

									<div>

										<a href="adminview.php" align="center"><span>View All Admins</span></a>

									</div>

								</li>

								<li>

									<div>

										<a href="adminprofile.php" align="center"><span>View Profile</span></a>

									</div>

								</li>

						</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="footer">

		<div>

			<div>

				<h3>NEWSLETTER</h3>

				<p>

					Not a part of the committee but want to recieve updates? Subscribe now for free!

				</p>

				<form action="portalindex.php">

					<input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">

					<input type="submit" value="Get">

				</form>

			</div>

			<div>

				<h4>LATEST News</h4>

				<ul>

					<li>

						<p>

							<a href="#">Kid becomes topnotcher in the CPA exams</a>

						</p><br/>

						<span>11/07/2013</span>

					</li>

					<li>

						<p>

							<a href="#">Alumni Juan dela Cruz got promoted to CEO</a>

						</p><br/>

						<span>11/03/2013</span>

					</li>

					<li>

						<p>

							<a href="#">Students not taking earthquake drill seriously</a>

						</p><br/>

						<span>11/27/2013</span>

					</li>

				</ul>

			</div>

			<div class="connect">

				<h4>FOLLOW US:</h4>

				<a href="http://www.facebook.com" class="facebook">Facebook</a> <a href="http://www.twitter.com" class="twitter">Twitter</a> <a href="http://www.google.com" class="google">Google+</a>

			</div>

		</div>

		<div>

			<p>

				T.E.A.M.L.E.T.S &#169; 2013 | All Rights Reserved

			</p>

		</div>

	</div>

</body>

</html>