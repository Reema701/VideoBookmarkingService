<?php

$user = 'root';
$pass = '';
$dbase = 'garage_week';

$con=mysql_connect('localhost',$user, $pass) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbase,$con) or die("Failed to connect to MySQL: " . mysql_error());

//echo "Connection success!!!";

//$video_name = "Green Lantern Trailer"; 
$video_name = $_GET['vid'];
//$bookmark_time = $_GET['id']; 
$user_details = "User 1";

		$query_precheck = "SELECT * FROM video_bookmarks WHERE video_name='$video_name' AND user_details='$user_details'";
		$result_precheck = mysql_query($query_precheck);
		
		if($result_precheck) 
			{ 
				if($row = mysql_fetch_assoc($result_precheck))
					{
						echo $row['bookmark_time']; 
					}
				else
					{
						//do nothing
					}
			}	
		else 
			{ 
				//Die for result_precheck
				die('Error: '.mysql_error($con));
			} 
	
mysql_close($con); 

?>