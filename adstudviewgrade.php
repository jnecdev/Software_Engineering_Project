<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style-admin.css" type="text/css">

	<script>

		function displayResult()

		{

			document.location.href = "index.php";

		}

	</script>

</head>

<body>

<?php

session_start();

if($_SESSION['admin']) {

}

else{ header("location:index.php"); }

$subj = $_GET['num'];
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

							include 'config-faculty.php';

							$username = $_SESSION['number'];
								Print "<h2>".$subj."</h2>";

						?>

							<p>

								<a href="stud-subjs.php">Back to Student Page</a><br/>

							 <br/>

							<TABLE BORDER="5"    WIDTH="100%"   CELLPADDING="4" CELLSPACING="3">

								<TR>

									<TH>Description</TH>

									<TH>Score</TH>

									<TH>Overall</TH>

									<TH>Group</TH>

									<TH>Date</TH>

									<TH>Delete</TH>

								</TR>

								<?php

								include 'config-subjects.php';

								$number = $_SESSION['number'];

								$usertable = "$subj"."_"."$number" . "_grades";

								$query = mysql_query("Select * from $usertable");

								$tey = "$subj"."_compute";

								$query2 = mysql_query("Select * from $tey");

								$total_score = 0;

								$total_overall = 0;

								$compute = 0;

								$tot = 0;

								$ave = 0;

								$tmp_final = 0;

								$final = 0;

								$over = 1;

								$c = 0;

								$d = 0;

								while($result = mysql_fetch_assoc($query))

									{	

										Print '<TR ALIGN="Center">';	 

										Print '<TD>'.$result['desc']."</TD>"; 

										Print "<TD>".$result['score']."</TD>"; 

										Print "<TD>".$result['overall']."</TD>"; 

										Print '<TD id="group'.$c.'">'.$result['group']."</TD>"; 

										Print "<TD>".$result['date']."</TD>"; 

										Print '<TD><a href="deletegrade.php?desc='.$result['desc'].'&date='.$result['date'].'&id='.$result['id'].'">Delete Grade</a></TD>';

										Print "</TR>";

										$total_score = $total_score + $result['score'];

										$total_overall = $total_overall + $result['overall'];

								}

								while($ro = mysql_fetch_assoc($query2)){

									$temph = $ro['desc'];
									$percent = $ro['percent'];

									$percent = $percent/100;

									$query = mysql_query("Select * from $usertable ORDER by group_id");	

									while($result = mysql_fetch_assoc($query))

									{	

										$temph2 = $result['group'];
										$score = $result['score'];
										$o = $result['overall'];

										if($temph2 == $temph){
											$compute = $compute + $score;
											$over = $over + $o;
										} 

									}

									$ave = ($compute / $over) * 100;

									$tmp_final = $ave * $percent;

									$final = $final + $tmp_final;

								}
								

								if($_SERVER['REQUEST_METHOD'] == 'POST') {

									include 'config-subjects.php';

									$desc = mysql_real_escape_string($_POST['desc']);

									$score = mysql_real_escape_string($_POST['score']);

									$overall = mysql_real_escape_string($_POST['overall']);

									$group = mysql_real_escape_string($_POST['group']);

									$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

									$today2 = date("Y/m/d", $today);

									$table = "$subject"."_compute";

									$query = mysql_query("Select * from $table");

									$g_id = 0;

									while($row = mysql_fetch_assoc($query)){

										$r = $row['desc'];
										if($r == $group){
 											$g_id = $row['group_id']; 
										}

									}

									for($a = 0; $a < 3; $a++){

										if($a == 1){

											mysql_query("INSERT INTO $usertable VALUES ('$g_id','$group','$desc', '$score', '$overall', '$today2','')");	

										}

										else{

											mysql_query("INSERT INTO '$usertable' VALUES ('$g_id','$group','$desc', '$score', '$overall', '$today2','')");	

										}									

									}

									header("location:adminportalstudentgrades.php");

								}

								if(isset($_GET['desc'])) {

									$desc = $_GET['desc'];

									$score = $_GET['score'];

									$overall = $_GET['overall'];

									$date = $_GET['date'];

									$number = $_SESSION['number'];

									$usertable = "$number" . "_grades";

									$query = mysql_query("SELECT * from $usertable");

									while($result = mysql_fetch_assoc($query))

									{

										$tmp = $result['desc'];

										if($tmp == $desc){

										for($a = 0; $a < 3; $a++){

											if($a == 1){

												mysql_query("DELETE FROM $usertable WHERE desc='$desc'");

											}else

											{

												mysql_query("DELETE FROM '$usertable' WHERE desc='$desc'");

											}

										}

										}

									}

								}

								

									?>

							</TABLE>
								<br/>
							<TABLE BORDER="5"    WIDTH="100%"   CELLPADDING="4" CELLSPACING="3">

								<TR>

									<TH>Total Score</TH>

									<TH>Total Overall</TH>

									<TH>Total Computed Grade</TH>

									<TH>Remark</TH>

								</TR>

								<TR ALIGN="CENTER">


									<?php

										Print "<TD>$total_score</TD>";

										Print "<TD>$total_overall</TD>";

										Print '<TD id ="final">'.$final.'</TD>';

										Print "<TD>";

										if($final >= 75){
											Print "Pass";
										}
										else{
											Print "Fail";
										}

										Print "</TD>";

									?>

								</TR>

							</TABLE>

						</div>

						<div>

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

				<form>

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