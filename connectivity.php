<?php

$user = 'root';
$pass = '';
$dbase = 'garage_week';

$con=mysql_connect('localhost',$user, $pass) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbase,$con) or die("Failed to connect to MySQL: " . mysql_error());

echo "Connection success!!!";

$video_name = $_GET['vid'];
$bookmark_time = $_GET['tm']; 
$user_details = "User 1";

if($bookmark_time != 0)
	{
		$query_precheck = "SELECT * FROM video_bookmarks WHERE video_name='$video_name' AND user_details='$user_details'";
		$result_precheck = mysql_query($query_precheck);
		
		if($result_precheck) 
			{ 
				if($row = mysql_fetch_row($result_precheck))
					{
					//Update the existing row
					$query_update = "UPDATE video_bookmarks SET bookmark_time='$bookmark_time' WHERE video_name='$video_name' AND user_details='$user_details'";
					$result_update = mysql_query($query_update);
						if($result_update) 
							{ 
								echo "Successfully updated row"; 
							}
						else 
							{ 
								die('Error: '.mysql_error($con));
							} 
					}
				else
					{
						//Control to come here when video + user combo doesnt exist in table
						$query_insert = "INSERT INTO video_bookmarks(video_name,bookmark_time,user_details)VALUES('$video_name','$bookmark_time','$user_details')";
						$result_insert = mysql_query($query_insert);
			
						if($result_insert) 
							{ 
								echo "Successfully inserted row into table."; 
							}
						else 
							{ 
								//Die for result_insert
								die('Error: '.mysql_error($con));
							} 
					}
			}	
		else 
			{ 
				//Die for result_precheck
				die('Error: '.mysql_error($con));
			} 
	}
else
	{
		echo "bookmark value 0, so not saving into db";
	}
	
mysql_close($con); 

?>