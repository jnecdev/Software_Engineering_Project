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

			<a href="index.html" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>

			<br/>

		

		</div>

	</div>

	<div class="body">

		<div class="register">

			<div>

				<div>

					<div class="register">

						<h2>Create new Admin</h2>

						<form action="adminregister.php" name="formadmin" onsubmit="return validateForm2()" method="POST"/>

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

										$query = mysql_query("SELECT * FROM admin WHERE username = '$username'");

										$rows = mysql_num_rows($query);

										if($rows > 0){

											die("Username Taken!<a href='adminregister.php'>Click here to go back</a>");

										} else {

											$user_input = mysql_query("INSERT INTO admin (username , password, fname, lname, mname, email, cell_number, phone_number) VALUES ('$username', '$password', '$fname', '$lname', '$mname', '$email', '$pnumber', '$cnumber')");

											echo("<p>Succesfully registered!</p>");

										}

									}

								}

							}

?>

									<tr>

										<td><a href="adportalindex.php"><label for="name"><span>B</span>ack to Profile</label></td>

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

										<td><input type="text" name="lname"/></td>

									</tr>

									<tr>

										<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>

										<td><input type="text" name="email"/></td>

									</tr>

									<tr>

										<td><label for="tel-number"><span>P</span>hone <span>N</span>umber: *</label></td>

										<td><input type="text" name="pnumber" required="required"/></td>

									</tr>

									<tr>

										<td><label for="tel-number"><span>C</span>ellphone <span>N</span>umber:</label></td>

										<td><input type="text" name="cnumber"/></td>

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