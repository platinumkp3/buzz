<?php
include "db/common_db.php";
$linkid=db_connect();

$username=$_POST['username'];
$password=$_POST['passwrd'];

$select="Select * from users where UNAME='".$username."' and UPASSWORD='".$password."' and USTATUS='1'";
$result=mysql_query($select,$linkid);
$num=mysql_num_rows($result);
if ($num > 0)
{
	$data=mysql_fetch_array($result);
	 $uid=$data['UID'];
	 $username=$data['UNAME'];
	$SESSION['UID']=$uid;
	$SESSION['UNAME']=$username;
		
	header("location:home.php");
}
?>