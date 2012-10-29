<?php
session_start();
$uid=$_SESSION['UID'];
include "db/common_db.php";
$linkid=db_connect();

	if(!is_dir("uploads/".$uid."")){   //this checks to make sure the directory does not already exist
		mkdir("uploads/".$uid."", 0777, true); //if the directory doesn't exist then make it
		chmod("uploads/".$uid."", 0777);  //chmod to 777 lets us write to the directory
	} 
   // Edit upload location here
   $destination_path = 'uploads/' . $uid .'/';

   $result = 0;
				
   $target_path = $destination_path . basename( $_FILES['userphotos']['name']);
   
   $file=$_FILES['userphotos']['name'];

   if(@move_uploaded_file($_FILES['userphotos']['tmp_name'], $target_path)) {
        $result = 1;
   }
	if ($result == 1)
	{
		echo $result; 
	}
?>