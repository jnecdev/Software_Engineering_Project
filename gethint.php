<?php

session_start();

include 'config-student.php';

$query = mysql_query("Select * from students");

while($row = mysql_fetch_assoc($query))
{
	$a[]=$row['username'];
	$a[]=$row['fname'];
	$a[]=$row['mname'];
	$a[]=$row['lname'];
}

$q = $_GET["q"];

if(strlen($q) > 0)
{
	$hint="";
	for($i = 0; $i < count($a); $i++)
	{
		if(strtolower($q) == strtolower(substr($a[$i], 0, strlen($q))))
		{
			if($hint == "")
			{
				$hint = $a[$i];
			}
			else
			{
				$hint = $hint." , ". $a[$i];
			}
		}
	
	}

}

if($hint == "")
{
	$response = "No Suggestions";
}
else{
	$response = $hint;
}

echo $response;
?>