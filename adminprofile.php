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
							include 'config-faculty.php';
							$username = $_SESSION['admin'];
							$query1 = mysql_query("Select fname, lname, mname FROM admin where username='$username'");
							while($result1 = mysql_fetch_array($query1))
							{
							Print "<h2>".$result1['lname'] .", ".$result1['fname'] ." " .$result1['mname']."</h2>";
							}
							Print"<p>Profile Summary</p><ul>";
							
							$query = mysql_query("SELECT * from admin where username = '$username'") ;
							while($result = mysql_fetch_array($query)) 
							{ 
								Print "<li><p>Phone Number: ".$result['phone_number'] . "</p></li>";
								Print "<li><p>Cell Number: " .$result['cell_number'] . "</p></li>"; 
								Print "<li><p>First Name: " .$result['fname'] . "</p></li>"; 
								Print "<li><p>Last Name: ".$result['lname'] . "</p></li>";
								Print "<li><p>Middle Name: " .$result['mname'] . "</p></li>"; 
								Print "<li><p>Email: " .$result['email'] ."</p></li>";
							}
							?>
							<li><p><a href="admineditinfo.php">Edit personal Info<a/></p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>