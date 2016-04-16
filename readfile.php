<?php

session_start();

$subject = $_SESSION['subject'];

$number = $_SESSION['number'];

include 'config-subjects.php';

$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

$today2 = date("Y/m/d", $today);

$table = "$subject"."_compute";

$g_id = 0;

$ctr = 0;

$num = 0;

$word = "";

$word_arr[] = array("","","","");

$usertable = "$subject"."_"."$number" . "_grades";

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)

{

	$tmpName  = $_FILES['userfile']['tmp_name'];

	$fileType = $_FILES['userfile']['type'];

	$file = fopen($tmpName,"r");

	$a = 0;

	while(!feof($file))
  	{

  		$lol = fgetc($file);

  		if($lol == '"'){

  			Print "<br/>";

  			$ctr++;

  			if($ctr == 2){

  				$word_arr[$num] = $word;

  				$query = mysql_query("Select * from $table");

  				$str = strtolower($word_arr[3]);
					
				while($row = mysql_fetch_assoc($query)){

					$r = $row['desc'];

					$r = strtolower($r);
						Print "$str == $r<br/>";
					if($r == $str){

 						$g_id = $row['group_id'];

 						Print "$g_id";

					}
				}


				/*for($a = 0; $a < 3; $a++){

					(string)$wor3 = mysql_real_escape_string($word_arr[3]);
					(string)$wor2 = mysql_real_escape_string($word_arr[2]);
					(string)$wor1 = mysql_real_escape_string($word_arr[1]);
					(string)$wor0 = mysql_real_escape_string($word_arr[0]);

					if($a == 1){

						//Print "$g_id | $word_arr[3] | $word_arr[2]| $word_arr[1] | $word_arr[0] <br/>";

						mysql_query("INSERT INTO $usertable VALUES ('$g_id','$wor3','$wor0', '$wor1', '$wor2', '$today2','')");	

					}

					else{

						//Print "$g_id | $word_arr[3] | $word_arr[2]| $word_arr[1] | $word_arr[0] <br/>";

						mysql_query("INSERT INTO '$usertable' VALUES ('$g_id','$wor3','$wor0', '$wor1', '$wor2', '$today2','')");	

					}									

				}*/

  				$word = "";

  				$ctr = 0;

  				$num = 0;

  			}
  		}

 	 	else if($lol == ","){

 	 			$word_arr[$num] = $word;
 	 			
 	 			$word = "";

 	 			$num++;

 	 	}

 		else{

 	 		$word = "$word"."$lol";

 	 		/*

			*/

 	 	}

  	}

	fclose($file);

//header("location:adminportalstudentgrades.php");

}
