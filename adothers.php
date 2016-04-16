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

							include 'config-student.php';

							Print "<h2>Disciplinary Records</h2>";

							Print "<p>Student List</p><br/>";

						?>

							

							<form action="adothers.php" name="lol" method="POST">

								Search: <input type="text" name="search" onkeyup="showHint(this.value)">
							
								<select name="section">

									<option>Student Number</option>
									<option>First Name</option>
									<option>Last Name</option>
									
									<!--<?php

									$query = mysql_query("Select DISTINCT section FROM students ORDER by section ASC");

									while($row = mysql_fetch_assoc($query))

									{

										Print '<option>'.$row['section'].'</option>';

									}

									?>-->

								</select>
								<Input type="submit" value="Search"/><br/>
								
								<p>Suggestions: <p id="txtHint"></p>		

							</form>

						<?php

							Print "<ul>";

							Print "<li>";

							Print "</li>";

							include 'config-student.php';

							if($_SERVER['REQUEST_METHOD'] == 'POST'){

								$message = mysql_real_escape_string($_POST['section']);
								
								$search = mysql_real_escape_string($_POST['search']);

								if($message == "Student Number")
								{
									$query = mysql_query("SELECT * FROM students WHERE username like '%$search%'");
								}
								else if($message == "Last Name")
								{
									$query = mysql_query("SELECT * FROM students WHERE lname like '%$search%'");
								}
								else{
									$query = mysql_query("SELECT * FROM students WHERE fname like '%$search%'");
								}

								Print '<a href="adothers.php">Back to Complete List</a>';

								Print "<h2>$message:</h2>";

								while($result = mysql_fetch_assoc($query)) 

								{

									Print '<li>' .'<p><a href="adstudentdis.php?token_id=923482734030958273840123048173209417324019857389201&number='.$result['username'].'&fname='.$result['fname'].'&mname='.$result['mname'].'&lname='.$result['lname'].'">' .$result['username'] ."</a></p>"."". ' ('.$result['lname'] .', '.$result['fname'].' '.$result['mname']. ')' .'</li>';	

								}

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