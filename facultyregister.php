<!DOCTYPE html>



<html>

<head>

	<meta charset="UTF-8">

	<title>Saint Benedict School of Novaliches</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

	<script type="text/javascript" src="validation.js"></script>

</head>

<body>

	<div class="header">

		<div>

			<a href="index.html" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<br/>

		</div>

	</div>

	<div class="body">

		<div class="register">

			<div>

				<div>

					<div class="register">

						<h2>Complete your registration</h2>

						<form action="facultyregister.php" name="formfaculty" onsubmit="return validateForm1()"method="POST"/>

							<div>

								<table>

								<?php


								include 'config-faculty.php';


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

									$subject = mysql_real_escape_string($_POST['subject']);

									$subjectdesc = mysql_real_escape_string($_POST['subjectdesc']);

									$start = mysql_real_escape_string($_POST['start']);

									$end = mysql_real_escape_string($_POST['end']);

									$year = mysql_real_escape_string($_POST['year']);

									$complete = "$fname "."$mname "."$lname";

									$sy = "$start"."-"."$end";

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

										$query = mysql_query("SELECT * FROM faculty WHERE username = '$username'");

										$rows = mysql_num_rows($query);

										if($rows > 0){

											die("Username Taken!<a href='facultyregister.php'>Click here to go back</a>");

										} else if($rows == 0){


										include 'config-faculty.php';

										$q = mysql_query("INSERT INTO `subject_list` VALUES ('$subject', '$subjectdesc', '$complete','$year','$sy')");

										$lol = mysql_query("Select section FROM class_advisory WHERE section='$section'");

										$n = mysql_num_rows($lol);

										if($n != 0){

											die("A Faculty has already taken $section as an advisory section. Select another section. <a href='facultyregister.php'>Click here to go back</a>");

										}

										else{

											if(!empty($q)){

											mysql_query("INSERT INTO `class_advisory` VALUES('$section', '$fname', '$mname','$lname','$subject','$sy')");

											$user = (string)$username;

											$user2 = "$user"."_sbsn";

											mysql_query("CREATE TABLE $user2 (`section` VARCHAR(30) NOT NULL, `address` VARCHAR(75) NOT NULL, `zip_code` INT(5) NOT NULL, `phone_number` INT(15) NOT NULL,`cell_number` INT(25) NOT NULL,`fname` VARCHAR(70) NOT NULL, `mname` VARCHAR(30) NOT NULL, `lname` VARCHAR(50) NOT NULL, `email` VARCHAR(35) NOT NULL, `subject` VARCHAR(35) NOT NULL, `subject_desc` VARCHAR(35) NOT NULL)")or die(mysql_error());

											$user_input = mysql_query("INSERT INTO faculty (username , password , fname , mname , lname , subject , subjectdesc) VALUES ('$username', '$password', '$fname', '$mname', '$lname', '$subject', '$subjectdesc')");

											$user_input = mysql_query("INSERT INTO $user2 (section, address, zip_code, phone_number, cell_number, fname, mname, lname, email, subject, subject_desc) VALUES ('$section', '$address', '$zip', '$pnumber', '$cnumber', '$fname', '$mname', '$lname', '$email', '$subject', '$subjectdesc')");

											include 'config-subjects.php';

											$subj_list = "$subject"."_student_list";

											$user_input = mysql_query("CREATE TABLE $subj_list ( `fname` VARCHAR(50) NOT NULL,`mname` VARCHAR(50) NOT NULL,`lname` VARCHAR(50) NOT NULL,`username` VARCHAR(15) NOT NULL)");

											$subj_list = "$subject"."_announcement";		

											$user_input = mysql_query("CREATE TABLE $subj_list ( `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `main` TEXT NOT NULL, `post_date` DATE NOT NULL)");

											$subj_list = "$subject"."_shared_files";

											$user_input = mysql_query("CREATE TABLE $subj_list ( `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(50) NOT NULL, `size` INT NOT NULL, `type` VARCHAR(50) NOT NULL, `message` TEXT NOT NULL, `post_date` DATE NOT NULL, `content` blob)");

											$subj_list = "$subject"."_compute";

											$user_input = mysql_query("CREATE TABLE $subj_list ( `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `desc` VARCHAR(50) NOT NULL, `percent` DOUBLE NOT NULL, `group_id` INT NOT NULL, UNIQUE (`desc`))");

											echo("Succesfully registered!");

											}

											else{

												echo "no data from insert";

											}

										}

										}

									}

								}

							}

?>

									<tr>

										<td><a href="adsubjects.php"><label for="name"><span>B</span>ack to Subjects</label></td>

									</tr>

									<tr>

										<td><label for="name"><span>*</span> means required</label></td>

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

										<td><label for="name"><span>A</span>dvisory Section: *</label></td>

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
											</select></td>

									</tr>

									<tr>

										<td><label for="name"><span>S</span>ubject Code(small letters and no space): *</label></td>

										<td><input type="text" name="subject" required="required"/></td>

									</tr>

									<tr>

										<td><label for="name"><span>S</span>ubject's Complete name: *</label></td>

										<td><input type="text" name="subjectdesc" required="required"/></td>

									</tr>

									<tr>

										<td><label for="year"><span>S</span>ubject's year level:</label></td>

										<td>
											<select name="year" style="width: 420px;">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											</select>
										</td>

									</tr>

									<tr>

										<td><label for="year"><span>S</span>chool Year: *</label></td>

										<td>
											<input type="number" name="start" value="<?php echo date("Y")?>" id="si" onchange="validateYear()" required> - 
											<input type="number" name="end" id="si" onchange="validateYear()" required>
										</td>

									</tr>

									<tr>

										<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>

										<td><input type="email" name="email"/></td>

									</tr>

									<tr>

										<td><label for="tel-number"><span>P</span>hone <span>N</span>umber: *</label></td>

										<td><input type="tel" name="pnumber" required="required"/></td>

									</tr>

									<tr>

										<td><label for="tel-number"><span>C</span>ellphone <span>N</span>umber:</label></td>

										<td><input type="text" name="cnumber"/></td>

									</tr>

									<tr>

										<td><label for="address"><span>A</span>ddress:</label></td>

										<td><textarea name="address" cols="30" rows="10"></textarea></td>

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