<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style-admin.css" type="text/css">

	<script type="text/javascript">

	function register(){

		document.location.href="register.php";
	}
	
	function showHint(str)
	{
		if(str.length == 0)
		{
			document.getElementById("txtHint").innerHTML="";
			return;
		}
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","gethint.php?q="+str,true);
		xmlhttp.send();
	
	}

	</script>

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

							Print "<h2>Master Student List</h2>";

							Print "<p>Profile Summary</p><br/>";

							

						?>

							

							<form action="adportalindex.php" name="lol" method="POST">

								<input type="text" name="search" onkeyup="showHint(this.value)"> <br/>
								<Input type="submit" value="Search"/>
								<p>Suggestions: <p id="txtHint"></p>
								<br/>
							</form>

						<?php

							Print "<ul>";

							Print "<li>";

							Print '<input type ="button" value="Register a student" onClick="register()">';

							Print "</li>";

							include 'config-student.php';

							if($_SERVER['REQUEST_METHOD'] == 'POST'){

								$pages = 0;

								$message = mysql_real_escape_string($_POST['search']);

								$query = mysql_query("Select * FROM students");

								$pages_query = mysql_num_rows($query);

								$pages = ceil($pages_query / 10);

								$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

								$start = ($page - 1) * 10;

								$query = mysql_query("SELECT * FROM students WHERE username like '%$message%' OR lname like '%$message%' OR fname like '%$message%' OR mname like '%$message%' LIMIT $start, 10");

								Print '<a href="adportalindex.php">Back to List</a>';

								Print '<p>Search Results:</p>';

								while($result = mysql_fetch_assoc($query)) 

								{

									Print '<li>' .'<p><a href="adportalstudent.php?number='.$result['username'].'&fname='.$result['fname'].'&mname='.$result['mname'].'&lname='.$result['lname'].'">' .$result['username'] ."</a></p>"."". ' ('.$result['lname'] .', '.$result['fname'].' '.$result['mname']. ')' .'</li>';	

								}

								Print '<div id="pagination"><br/>';

							if($pages >= 1){

								$temp = 1;

								if($pages >= 20)
								{
									$temp = $page - 10;
									if($temp <= 0){
										$temp = 1;
									}
									if($page > 1){
										echo '<a href="?page='.$temp.'">Previous</a>';
									}
								}

								for($x = $page; $x <= $pages; $x++){
									echo ($x == $page) ? '<strong> '.$x.' </strong>' : '<a href="?page='.$x.'"> '.$x.' </a>';
									if($x == ($page + 9)){
										break;
									}
								}

								if($pages >= 10)
								{
									$temp = $page + 10;
									if($temp <= $pages)
									{
										echo '<a href="?page='.$temp.'">Next Group</a>';
									}
								}
							}

							Print "</div>";

							}

							else

							{

							$query = mysql_query("Select * FROM students");

							$pages_query = mysql_num_rows($query);

							$pages = ceil($pages_query / 10);

							$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

							$start = ($page - 1) * 10;

							$query = mysql_query("Select * from students ORDER BY username ASC LIMIT $start, 10");

							while($result = mysql_fetch_array($query)) 

									{

										Print '<li>' .'<p><a href="adportalstudent.php?number='.$result['username'].'&fname='.$result['fname'].'&mname='.$result['mname'].'&lname='.$result['lname'].'">' .$result['username'] ."</a></p>"."". ' ('.$result['lname'] .', '.$result['fname'].' '.$result['mname']. ')' .'</li>';	

									}

							Print '<div id="pagination"><br/>';

							if($pages >= 1){

								$temp = 1;

								if($pages >= 20)
								{
									$temp = $page - 10;
									if($temp <= 0){
										$temp = 1;
									}
									if($page > 1){
										echo '<a href="?page='.$temp.'">Previous</a>';
									}
								}

								for($x = $page; $x <= $pages; $x++){
									echo ($x == $page) ? '<strong> '.$x.' </strong>' : '<a href="?page='.$x.'"> '.$x.' </a>';
									if($x == ($page + 9)){
										break;
									}
								}

								if($pages >= 10)
								{
									$temp = $page + 10;
									if($temp <= $pages)
									{
										echo '<a href="?page='.$temp.'">Next Group</a>';
									}
								}
							}

							Print "</div>";

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