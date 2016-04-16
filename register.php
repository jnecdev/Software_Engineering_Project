<!DOCTYPE html>



<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

	<script type="text/javascript" src="validation.js"></script>

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

		</div>

	</div>

	<div class="body">

		<div class="register">

			<div>

				<div>

					<div class="register">

						<h2>Complete your registration</h2>

						<form name="form1" action="register.php" onsubmit="return validateForm()" method="POST"/>

							<div>

								<table>

								<?php


								include 'config-student.php';

		

								if($_SERVER['REQUEST_METHOD'] == 'POST') { 

									$username = mysql_real_escape_string($_POST['username']);

									$password = mysql_real_escape_string($_POST['password']);

									$cpassword = mysql_real_escape_string($_POST['cpassword']);

									$fname = mysql_real_escape_string($_POST['fname']);

									$lname = mysql_real_escape_string($_POST['lname']);

									$mname = mysql_real_escape_string($_POST['mname']);

									$email = mysql_real_escape_string($_POST['email']);

									$pnumber = mysql_real_escape_string($_POST['pnumber']);

									$cnumber = mysql_real_escape_string($_POST['cnumber']);

									$address = mysql_real_escape_string($_POST['address']);

									$zip = mysql_real_escape_string($_POST['zip']);

									$section = mysql_real_escape_string($_POST['section']);

									$enroll = mysql_real_escape_string($_POST['enroll']);

									$cperson = mysql_real_escape_string($_POST['cperson']);

									$nationality = mysql_real_escape_string($_POST['nationality']);

									$religion = mysql_real_escape_string($_POST['religion']);

									$emergency = mysql_real_escape_string($_POST['emergency']);

									$suffix = mysql_real_escape_string($_POST['suffix']);

								if(empty($username)) {

									echo "Fill in a username!"; 

								} else {

									if(empty($password) ) {

										echo("You have to fill in a password!");

									}

									else if(empty($cpassword)){

										echo("Fill in a confirmation password!");

									}

									else if($password != $cpassword){

										echo("Your passwords do no match!");

									}

									else {

										$query = mysql_query("SELECT * FROM students WHERE username = '$username'");

										$rows = mysql_num_rows($query);

										if($rows > 0){

											die("Username Taken!<a href='register.php'>Click here to go back</a>");

										} 

										else

										 {

										 	$query = mysql_query("Select * from student_sections WHERE section='$section'");

										 	$num = mysql_num_rows($query);

										 	if($num >= 40){

										 		Print " The section exeeded its maximum limit. Enroll the student on a different section.";

										 	}

										 	else

										 	{

											$user = (string)$username;

											$user2 = "$user"."_sbsn";

											mysql_query("CREATE TABLE $user2 (`username` VARCHAR(20), `section` VARCHAR(30) NOT NULL, `address` VARCHAR(75) NOT NULL, `zip_code` INT(5) NOT NULL, `phone_number` INT(15) NOT NULL,`cell_number` INT(25) NOT NULL,`fname` VARCHAR(70) NOT NULL, `mname` VARCHAR(30) NOT NULL, `lname` VARCHAR(50) NOT NULL, `email` VARCHAR(35) NOT NULL, `enroll_date` DATE NOT NULL, `cperson` VARCHAR(150) NOT NULL, `nationality` VARCHAR(50) NOT NULL, `religion` VARCHAR(35) NOT NULL, `emergency` VARCHAR(35) NOT NULL, `suffix` VARCHAR(5) NOT NULL)")or die(mysql_error());

											$user2 = "$user"."_subjects";

											mysql_query("CREATE TABLE $user2 (`subjects` VARCHAR(30) NOT NULL, `teacher` VARCHAR(35) NOT NULL, `subject_name` VARCHAR(35) NOT NULL)")or die(mysql_error());

											$user2 = "$user"."_notes";

											mysql_query("CREATE TABLE $user2 (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,`post_date` DATE NOT NULL, `main` TEXT NOT NULL)")or die(mysql_error());

											$user2 = "$user"."_admin";

											mysql_query("CREATE TABLE $user2 (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,`post_date` DATE NOT NULL, `main` TEXT NOT NULL)")or die(mysql_error());

											$user2 = "$user"."_dis";

											mysql_query("CREATE TABLE $user2 (`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,`post_date` DATE NOT NULL, `subject` VARCHAR(100) NOT NULL, `main` TEXT NOT NULL)")or die(mysql_error());

											$user2 = "$user"."_sbsn";

											$user_input = mysql_query("INSERT INTO students (username , password, fname, lname, mname, section) VALUES ('$username', '$password', '$fname', '$lname', '$mname', '$section')");

											$user_input = mysql_query("INSERT INTO $user2 (username, section, address, zip_code, phone_number, cell_number, fname, mname, lname, email, enroll_date, cperson, nationality, religion, emergency, suffix) VALUES ('$username','$section', '$address', '$zip', '$pnumber', '$cnumber', '$fname', '$mname', '$lname', '$email', '$enroll', '$cperson', '$nationality', '$religion', '$emergency', '$suffix')");

											echo("<p>Succesfully registered!</p>");

											}

										}

									}

								}

							}

?>

									<tr>

										<td><a href="adportalindex.php"><label for="name"><span>B</span>ack to Student Masterpage</label></td>

									</tr>

									<tr>

										<td><label for="notice"><span>*</span> means required</label></td>

									</tr>

									<tr>

										<td><label for="name"><span>U</span>sername: *</label></td>

										<td><input type="text" name="username" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>P</span>assword: *</label></td>

										<td><input type="password" name="password" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>C</span>onfirm Password: *</label></td>

										<td><input type="password" name="cpassword" required="required"></td>

									</tr>

									<tr>

										<td><label for="name"><span>F</span>irst Name: *</label></td>

										<td><input type="text" name="fname" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>M</span>iddle Name: *</label></td>

										<td><input type="text" name="mname" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>L</span>ast Name: *</label></td>

										<td><input type="text" name="lname" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>Z</span>ip code:</label></td>

										<td><input type="text" name="zip"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>S</span>ection:</label></td>

										<td>
											<select name="section" style="width: 420px;">
												<option>1-St.Gerald</option>
												<option>1-St.George</option>
												<option>1-St.Giles</option>
												<option>1-St.Gregory</option>
												<option>1-St.Goderic</option>
												<option>2-St.Hundfrid</option>
												<option>2-St.Hilary</option>
												<option>2-St.Herman</option>
												<option>2-St.Hildegard</option>
												<option>2-St.Herbert</option>
												<option>3-St.James</option>
												<option>3-St.Jerome</option>
												<option>3-St.John</option>
												<option>3-St.Joseph</option>
												<option>4-St.Landric</option>
												<option>4-St.Lawrence</option>
												<option>4-St.Leonard</option>
												<option>4-St.Leander</option>
											</select>
										</td>

									</tr>

									<tr>

										<td><label for="name"><span>S</span>uffix:</label></td>

										<td>
											<select name="suffix" style="width: 420px;">
												<option>None</option>
												<option>Jr.</option>
												<option>Sr.</option>
												<option>I</option>
												<option>II</option>
												<option>III</option>
												<option>IV</option>
											</select>
										</td>

									</tr>

									<tr>

										<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>

										<td><input type="text" name="email"/></td>

									</tr>

									<tr>

										<td><label for="tel-number"><span>P</span>hone <span>N</span>umber: *</label></td>

										<td><input type="number" name="pnumber" required="required"/></td>

									</tr>

									<tr>

										<td><label for="cel-number"><span>C</span>ellphone <span>N</span>umber:</label></td>

										<td><input type="number" name="cnumber"/></td>

									</tr>

									<tr>

										<td><label for="enroll-date"><span>D</span>ate <span>E</span>nrolled: *</label></td>

										<td><input type="date" name="enroll"/></td>

									</tr>

									<tr>

										<td><label for="emergency"><span>C</span>ontact incase of emergency: *</label></td>

										<td><input type="number" name="emergency" required="required"/></td>

									</tr>


									<tr>

										<td><label for="Guardian"><span>C</span>ontact Person: *</label></td>

										<td><input type="text" name="cperson" required="required" /></td>

									</tr>

									<tr>

										<td><label for="nationality"><span>N</span>ationality:</label></td>

										<td><input type="text" name="nationality"/></td>

									</tr>

									<tr>

										<td><label for="religion"><span>R</span>eligion:</label></td>

										<td><input type="text" name="religion"/></td>

									</tr>

									<tr>

										<td><label for="address"><span>A</span>ddress: *</label></td>

										<td><textarea name="address" cols="40" rows="5" required="required"></textarea></td>

									</tr>

								</table>

								<input type="submit" value="Register"/>

							</div>

						</form>

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

					Nulla porttitor vulputate elit, trist ique malesuada sem.

				</p>

				<form action="index.html">

					<input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">

					<input type="submit" value="Get">

				</form>

			</div>

			<div>

				<h4>LATEST BLOG</h4>

				<ul>

					<li>

						<p>

							<a href="blog.html">Phasellus parea ut di tincidunt blandit nisi ut pellentesque.</a>

						</p>

						<span>11/07/2011</span>

					</li>

					<li>

						<p>

							<a href="blog.html">Donec dictum semper augue, ut consectetur magna posuere eget.</a>

						</p>

						<span>11/03/2011</span>

					</li>

					<li>

						<p>

							<a href="blog.html">Cum sociis natoque penatibus et magnis dis parturient.</a>

						</p>

						<span>11/27/2011</span>

					</li>

				</ul>

			</div>

			<div class="connect">

				<h4>FOLLOW US:</h4>

				<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">Facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">Twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" class="google">Google+</a>

			</div>

		</div>

		<div>

			<p>

				Summer Camp &#169; 2011 | All Rights Reserved

			</p>

		</div>

	</div>

</body>

</html>