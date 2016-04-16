<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SBSN LOGIN</title>
        
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page">
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript">
		<link rel="shortcut icon" href="http://tympanus.net/Tutorials/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="./Animated Form Switching with jQuery_files/style.css">
		<script type="text/javascript" async="" src="./Animated Form Switching with jQuery_files/ga.js"></script><script src="./Animated Form Switching with jQuery_files/cufon-yui.js" type="text/javascript"></script><style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>
   	<script type="text/javascript">
   		function home(){
   			document.location.href="index.php";
   		}
   	</script>
   </head>
    <body>
		<div class="wrapper">
			<h1>
				<IMG class="displayed" src="./Animated Form Switching with jQuery_files/logo1.png">
			</h1>
			
			<h2>
				SBSN STUDENT PORTAL
			</h2>
			
			<div class="content">
				<div id="form_wrapper" class="form_wrapper" style="width: 350px; height: 406px;">
					<form class="login active" action="checklogin.php" method="POST">
						<h3> LOGIN
						<cufon class="cufon cufon-canvas" alt="Login" style="width: 73px; height: 25px;"><canvas width="84" height="28" style="width: 84px; height: 28px; top: -2px; left: 0px;"></canvas><cufontext><input type="submit">Login</cufontext></cufon></h3>
						<br/><br/>
						<div>
							<label>Username:</label>
							<input type="text" name="username">
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password:
							<input type="password" name="password">
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<div class="bottom">
								<input type="submit" value="Login">
								<div class="clear"></div>
							</div>
						</div>
						<div class="bottom">
							<form>
								<input type="button" value="Back to Home" onclick="home()">
								<div class="clear"></div>
							</form>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>