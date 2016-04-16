<?php
session_start();
$subject = $_SESSION['subject'];
include 'config-subjects.php';

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$table = "$subject"."_shared_files";
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$message = mysql_real_escape_string($_POST['message']);
$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$today2 = date("Y/m/d", $today);
$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$query = "INSERT INTO $table (name, size, type, content, message, post_date ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$message','$today2')";
mysql_query($query);
header("location:adminportalfiles.php");
}

?>