<?php
session_start();
$subject = $_SESSION['subject'];
include 'config-subjects.php';
$table = "$subject"."_shared_files";
$id = $_GET['id'];
$name = $_GET['name'];

mysql_query("DELETE FROM $table WHERE id='$id' AND name='$name'");
header("location: adminportalfiles.php");

?>