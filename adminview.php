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

							Print "<h2>Administrators</h2>";

							Print "<br/>";

							

						?>

							

							<form action="adminview.php" name="lol" method="POST">

								<Input type="text" name="search"/> 

								<Input type="submit" value="Search"/>

							</form>

						<?php

							Print "<ul>";

							Print "<li>";

							Print "</li>";

							include 'config-faculty.php';

							if($_SERVER['REQUEST_METHOD'] == 'POST'){

								$message = mysql_real_escape_string($_POST['search']);

								$query = mysql_query("SELECT * FROM students WHERE username like '%$message%' OR lname like '%$message%' OR fname like '%$message%' OR mname like '%$message%'");

								Print '<a href="adportalindex.php">Back to List</a>';

								Print '<p>Search Results:</p>';

								while($result = mysql_fetch_assoc($query)) 

								{

									Print '<li>' .'<p><a href="adportalstudent.php?number='.$result['username'].'&fname='.$result['fname'].'&mname='.$result['mname'].'&lname='.$result['lname'].'">' .$result['username'] ."</a></p>"."". ' ('.$result['lname'] .', '.$result['fname'].' '.$result['mname']. ')' .'</li>';	

								}

							}

							else

							{

							$query = mysql_query("Select * FROM admin");

							while($result = mysql_fetch_array($query)) 

									{

										Print '<li>' .'<p>' .$result['username'] ."</p>"."". ' ('.$result['lname'] .', '.$result['fname'].' '.$result['mname']. ')' .'</li>';

										Print '<a href="deleteadmin.php?token_id=09ds7f0sd8dkfjxae9fxdugs9d8f7s9d8xf7sd98g7csd98fg77f9823iy8rcmwexfjweriguwoasfjdcmre98utc5w3fjrmffwjimeorfww1w0r1u203r19320r2x85t45yerw02&username='.$result['username'].'&lname='.$result['lname'].'&fname='.$result['fname'].'&mname='.$result['mname'].'" onClick="succ()">Delete Account</a>';	

									}

							}

							?>

							</ul>

							</div>

						<div>						

						<ul>

						<ul>

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