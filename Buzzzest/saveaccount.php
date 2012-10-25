<?php
session_start();
include "db/common_db.php";
$linkid=db_connect();

$account=$_POST['account'];
$username=$_POST['username'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$bird=$_POST['bird'];
$birm=$_POST['birm'];
$biry=$_POST['biry'];
$place=$_POST['place'];
$interests=$_POST['interests'];
$occupation=$_POST['occupation'];
$industry=$_POST['industry'];
$bio=$_POST['bio'];
$url=$_POST['url'];
$dob=$biry."-".$birm."-".$bird;

$select_user="select * from users where UNAME='".$username."' and UEMAILID='".$email."'";
$result_sel= mysql_query($select_user,$linkid);
$num_sel= mysql_num_rows($result_sel);

if ($num_sel == 0)
{
	$insert="insert into users(UNAME,UPASSWORD,USTATUS,UFULLNAME,UEMAILID,UBIO,
	UINDUSTRY,UOCCUPATION,UINTEREST,UGENDER,UWEBSITE,UACCOUNT,UDOB,UPLACE)
	 values('".htmlspecialchars($username)."','".$password."','1','".htmlspecialchars($fullname)."','".$email."',
	 '".$bio."','".$industry."','".$occupation."','".$interests."','".$gender."','".$url."','".$account."','".$dob."','".$place."')";
	$res_insert=mysql_query($insert,$linkid);
	echo "<h2>Successfully Done</h2><a href='index.php' >HOME</a> ";
}
else 
{
	echo "account with the same username or email address exsists plz check again <a href='index.php'>BACK</a>";
}
?>