<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Saint Benedict School of Novaliches</title>
	<link rel="stylesheet" href="css/style-admin2.css" type="text/css">
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
			<!--<p id="schoolname" >
			Maria Montessori School of Quezon City
			</p>--><br/>
			<ul>
				<li>
					<a href="adportalindex.php"><span>S</span>tudents</a>	
				</li>
				<li>
					<a href="adsubjects.php"><span>S</span>ubjects</a>
				</li>
				<li class="selected">
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
							$number = $_SESSION['n'];
							$name = $_SESSION['name'];
							 Print "<h2>$name: Notice</h2>";?>
							<?php
							include 'config-student.php';
							$table = "$number"."_admin";
							Print '<p><a href="adstudentdis.php?token_id=923482734030958273840123048173209417324019857389201&number='.$number.'&lname=&mname=&fname">Back to Records</a></p>';
							$query = mysql_query("Select * FROM $table ORDER BY id DESC");
							while($result = mysql_fetch_array($query))
							{ 
								$date = $result['post_date']; 
								$comment = $result['main'];
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