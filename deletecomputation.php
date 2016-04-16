<?php
session_start();
include 'config-subjects.php';
$subject = $_SESSION['subject'];
$number = $_SESSION['number'];
$tab = "$subject"."_compute";

mysql_query("DELETE FROM $tab");

header("location: adminportalstudentgrades.php?number=".$number."");
?>