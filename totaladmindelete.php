<?php
include 'config-faculty.php';

$username = $_GET['username'];

mysql_query("DELETE FROM admin WHERE username='$username'");

header("location: adminview.php");

?>