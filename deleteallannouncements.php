<?php
session_start();
if($_SESSION['admin']){
session_start();
include 'config-subjects.php';
mysql_query("DELETE FROM announcement");
header("location: adportalcommunity.php");
}
else{
	header("location: index.php");
}

?>