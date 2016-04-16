<?php
session_start();
$subject = $_SESSION['subject'];
$user = $_SESSION['studentname'];
include 'config-subjects.php';

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
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
$usertable ="$subject"."_"."$user"."_files";
$query = "INSERT INTO $usertable (file, size, type, title, message, post_date ) ".
"VALUES ('$content', '$fileSize', '$fileType', '$fileName', '$message', '$today2')";
mysql_query($query);
echo "Success";
header("location:askteacher.php");
}

?>