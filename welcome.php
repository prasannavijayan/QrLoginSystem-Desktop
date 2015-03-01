<?php

$email = $_GET['q'];

// Complete Datbase work 

$connection = mysqli_connect("localhost", "root", "root", "checkin");

if(!$connection) { die(mysqli_error()); }

$flag = 0;
 
$query = mysqli_query($connection, "select * from checkinsystem");

while($row = mysqli_fetch_array($query)) { 
											if(strcmp($email == $row[0]) == 0) 
												{
													$flag = 1;	
												} 
											else 
												{
													$flag = 0;
												}
										}
	if($flag == 1) { 
			$q = mysqli_query($connection, "update checkinsystem set status=$flag");
			$ext = "email=".$email."&flag=".$flag;
			header("location:next.php?".$ext);

			}
	else {
			header("location:next.php");
		}
		




?>