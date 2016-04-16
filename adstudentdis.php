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
$number = $_GET['number'];
$name = "";
if(!empty($_GET['lname']) && !empty($_GET['mname']) && !empty($_GET['fname'])){
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$_SESSION['name'] = "$lname, $fname $mname";
}
$_SESSION['n'] = $number;
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
							include 'config-student.php';
							$name = $_SESSION['name'];
							Print "<h2>$name</h2>";
							Print "<p>Disciplinary Records</p><br/>";
						?>
							<TABLE BORDER="5"    WIDTH="100%"   CELLPADDING="4" CELLSPACING="3">
								<TR>
									<TH>Subject</TH>
									<TH>Description</TH>
									<TH>Date</TH>
								</TR>

								<?php
								$table = "$number"."_dis";
								$query = mysql_query("Select * from $table");
								while($row = mysql_fetch_assoc($query))
								{
									Print '<TR ALIGN="Center">';
									Print "<TD>".$row['subject']."</TD>";
									Print "<TD>".$row['main']."</TD>";
									Print "<TD>".$row['post_date']."</TD>";
									Print "</TR>";
								}
								?>
								<TR ALIGN="Center">
									<form action="adddis.php" method="POST">
										<TD><input type="text" name="subject"></TD>
										<TD><input type="text" name="desc"></TD>
										<TD><input type="date" name="date"></TD>
								</TR>
								<TR Align="Center">
									<TD><input type="submit" value="Add Record"></TD>
								</TR>	
									</form>
							</TABLE>
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
										<p>Post a notice to the student:</p><br/>
										<form action="disnotice.php" method="POST">
											<textarea name="message" cols="33" rows="10"></textarea>
											<input type="submit" value="Submit">
										</form>
									</div>
								</li>
								<li>
								<div>
										<a href="disarchive.php" align="center"><span>View Notice Archive</span></a>
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