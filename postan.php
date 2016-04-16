<?php

session_start();

include 'config-subjects.php';



$message = mysql_real_escape_string($_POST['message']);

$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

$today2 = date("Y/m/d", $today);

$expire = mktime(0,0,0,date("m"),date("d")+90,date("Y"));

$expire2 = date("Y/m/d", $expire);

$query = mysql_query("INSERT INTO announcement (post_date , main, expire) VALUES ('$today2', '$message', '$expire2')");

Print "Expires at $expire2";

header("location: adportalcommunity.php");

?>