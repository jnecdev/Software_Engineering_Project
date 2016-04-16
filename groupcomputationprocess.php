<?php
session_start();
include 'config-subjects.php';
$desc = mysql_real_escape_string($_POST['desc']);
$overall = mysql_real_escape_string($_POST['overall']);
$subject = $_SESSION['subject'];
$number = $_SESSION['number'];
$tab = "$subject"."_compute";
$id = 0;
$per = 0.0;
$query = mysql_query("Select * from $tab");
$query1 = mysql_query("Select * from $tab");

if(!empty($query)){

	while($lol = mysql_fetch_assoc($query1)){
		$per1 = $lol['percent'];
		$per = $per + $per1;
	}
	$per = $per + $overall;

	while($row = mysql_fetch_assoc($query)){
		$id++;
	}
	$id = $id + 1;
}
else{
	$id = 1;
	$per = $per + $overall;
}

if($per > 100){
		Print '<script>var r=confirm("Your computations have exeeded 100%. Click OK to return to grades or Cancel to input Another computation");
		if (r==true)
  		{
  			window.location.assign("adminportalstudentgrades.php?number='.$number.'");
  		}
		else
 		{
 			window.location.assign("groupcomputation.php");
  		}
  		</script>';
}
else
{

for($a = 0; $a < 3; $a++){

	if($a == 1){

		mysql_query("INSERT INTO $tab VALUES ('', '$desc', '$overall','$id')");	

	}

	else{

		mysql_query("INSERT INTO '$tab' VALUES ('', '$desc', '$overall','$id')");	

	}									

}

header("location: adminportalstudentgrades.php?number=".$number."");
}

?>