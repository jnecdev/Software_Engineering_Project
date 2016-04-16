<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

	<script type="text/javascript" src="validation.js"></script>

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

if($_SESSION['username']) {

}

else{ header("location:index.php"); }

?>

	<div class="header">

		<div>

			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<br/>

			<ul>

				<li>

					<a href="adminportalindex.php"><span>P</span>rofile Summary</a>

				</li>

				<li class="selected">

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

							$subject = "";

							$query1 = mysql_query("Select subject, subject_desc FROM $usertable");

							while($result1 = mysql_fetch_array($query1))

							{

								$subject = $result1['subject'];

								Print "<h2>".$result1['subject'] .": ".$result1['subject_desc']."</h2>";

							}

						?>

							<p>

								<a href="adminportalstudent.php">Back to Student Page</a>

							<TABLE BORDER="5"    WIDTH="100%"   CELLPADDING="4" CELLSPACING="3">

								<TR>

									<TH>Description</TH>

									<TH>Overall Percentage</TH>

									<TH>Delete</TH>

								</TR>

									<TR ALIGN="CENTER">

									<form name="formcompute" action="groupcomputationprocess.php" onsubmit="return validateForm3()" method="POST">

										<TD><input type="text" name="desc"></TD>

										<TD><input type="number" name="overall" value="00" style="width:50px;"></TD>

										<TD><input type="submit" value="Submit"></TD>

									</form>

								</TR>

							</TABLE>
							<br/>
							<br/>
							<H2> Grade Computations </H2>
							<TABLE BORDER="5"    WIDTH="100%"   CELLPADDING="4" CELLSPACING="3">

								<TR>

									<TH>Description</TH>

									<TH>Overall Percentage</TH>

									<TH>Delete</TH>

								</TR>


								<?php

								include 'config-subjects.php';

								$table = "$subject"."_compute";

								$query = mysql_query("Select * from $table");

								$total = 0;

								while($row = mysql_fetch_assoc($query)){

									Print "<TR>";

										Print '<TD ALIGN="CENTER">'.$row['desc'];

										Print "</TD>";

										Print '<TD ALIGN="CENTER">'.$row['percent']."%";

										$val = $row['percent'];

										$total = $total + $val;

										Print "</TD>";

										$id = $row['id'];

										Print '<TD ALIGN="CENTER"><a href="deletecomputationprocess.php?id='.$id.'">Delete</a>';

										Print "</TD>";

									Print "</TR>";

								}

								?>
								<TR>
									<TD ALIGN="CENTER"> Total Consumed Percentage</TD>
									<TD ALIGN="CENTER"><?php Print '<strong id="total">'."$total%".'</strong>' ?></TD>
									<TD ALIGN="CENTER"><a href="deletecomputation.php">Delete All Computations</a></TD>
								</TR>

							</TABLE>
						</div>

						<div>

							<ul>

								<li>

								<div>

										<a href="adminportalfiles.php" align="center"><span>Share/View Subject Files</span></a>

								</div>

								</li>

								<li>

								<div>

										<a href="subjectannouncement.php" align="center"><span>View Subject Announcements</span></a>

								</div>

								</li>

								<li>

									<div>

										<span>Post an announcement for this subject</span>

										<form action="subjectpost.php" method="POST">

											<textarea cols="33" rows="5" name="myname"></textarea>

											<br/>

											<input type="Submit" value="Submit" />

										</form>

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