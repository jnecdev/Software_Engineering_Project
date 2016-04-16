<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style-admin2.css" type="text/css">

	<script>

	function myFunction()

	{

		var r = confirm("Are you sure you want to delete all Announcements?");

		if(r == true){

			window.location="deleteallannouncements.php";

		}

	}

	function myFunction2()

	{

		document.location.href="adminpostannouncement.php";

	}

	</script>

</head>

<body>

<?php

session_start();

if($_SESSION['admin']) {

}

else{ header("location:index.php"); }

?>

	<div class="header">

		<div>

			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>
			<br/>

			<ul>

				<li>

					<a href="adportalindex.php"><span>S</span>tudents</a>	

				</li>

				<li>

					<a href="adsubjects.php"><span>S</span>ubjects</a>

				</li>

				<li>

					<a href="adothers.php"><span>O</span>ther Records</a>

				</li>

				<li class="selected">

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

							<h2>School Announcements</h2>

							<input type="button" onclick="myFunction()" value="Delete all announcements"><br/>

							<input type="button" onclick="myFunction2()" value="Post an Announcement" >

							<?php

							include 'config-subjects.php';

							$query = mysql_query("Select * FROM announcement ORDER BY id DESC");

							while($result = mysql_fetch_array($query))

							{ 

								$id = $result['id'];

								$date = $result['post_date']; 

								$comment = $result['main'];

								$expire = $result['expire'];

								$today = mktime(0,0,0,date("m"),date("d")+1,date("Y"));

								$today2 = date("Y-m-d", $today);

								if($today2 == $expire){

									mysql_query("DELETE FROM  `announcement` WHERE id = '$id'");

								}

								Print "<p>Posted: " . $date ."<br/> " .$comment ."</p><br/><br/>";

							}

							?>

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

				<form action="index.php">

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