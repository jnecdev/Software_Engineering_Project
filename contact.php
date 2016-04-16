<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Saint Benedict School of Novaliches</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script type="text/javascript">
	function notice(){
		alert("Your message has been sent! Thank you for your feedback!");
	}
	</script>
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php" id="logo"><img src="images/benedict_header.jpg" alt="logo" height="100px" width="900px"></a>
			<!--<p id="schoolname" >
			Maria Montessori School of Quezon City
			</p>--><br/>
			<ul>
				<li>
					<a href="index.php"><span>H</span>ome</a>
				</li>
				<li>
					<a href="Login.php"><span>S</span>udent Portal</a>
				</li>
				<li>
					<a href="admissions.html"><span>A</span>dmissions</a>
				</li>
				<li>
					<a href="about.html"><span>A</span>bout</a>
				</li>
				<li class="selected">
					<a href="contact.html"><span>C</span>ontact</a>
				</li>
			</ul>
			<div>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="contact">
			<div>
				<div>
					<div class="contact">
						<h2>Questions? Comments and Suggestions?</h2>
						<div class="address">
							<span><span>A</span>ddress:</span>
							<p>
								1234 Benedict Street, Novaliches, Quezon City
							</p>
							<span><span>P</span>hone <span>N</span>umber:</span>
							<p>
								8-700 or 8777777
							</p>
							<span><span>F</span>ax <span>N</span>umber:</span>
							<p>
								911
							</p>
						</div>
						<?php
							if($_SERVER['REQUEST_METHOD'] == "POST")
							  {
							  	$email = $_REQUEST['email'] ;
							  	$name = $_REQUEST['name'] ;
							  	$subject = $_REQUEST['subject'] ;
							  	$message = $_REQUEST['message'] ;
							  	mail("xtian.xchan@gmail.com", $subject, $message, "From:" . $name ."<br/>". $email);
							  	echo "Thank you for using our mail form";
							  }
						?>
						<h3><span>F</span>or <span>A</span>ny <span>I</span>nquiries, <span>P</span>lease <span>F</span>ill <span>o</span>ut <span>T</span>he <span>F</span>orm <span>B</span>elow.</h3>
						<form action="contact.php" method="POST">
							<table>
								<tr>
									<td><label for="name"><span>N</span>ame:</label></td>
									<td><input type="text" id="name"></td>
								</tr>
								<tr>
									<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>
									<td><input type="text" id="email"></td>
								</tr>
								<tr>
									<td><label for="subject"><span>S</span>ubject:</label></td>
									<td><input type="text" id="subject"></td>
								</tr>
								<tr>
									<td><label for="message"><span>M</span>essage:</label></td>
									<td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
								</tr>
							</table>
							<input type="submit" value="Send" id="submit" onclick="notice()">
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
