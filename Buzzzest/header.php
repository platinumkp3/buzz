<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Buzzzest</title>
<link href="css/home.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/content.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.2.js" type="application/javascript" >
</script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<link href="css/modalPopLite.css" rel="stylesheet" type="text/css" />

<script src="js/modalPopLite.min.js" type="text/javascript"></script>

</head>

<body>
 
<div class="container">
  <div class="header">Buzzzest
  <input type="text" value="Search" />
	
  &nbsp;&nbsp;<a href="home.php">Home</a>&nbsp;&nbsp; <a href="profile.php" >Profile</a>&nbsp;&nbsp;
  <a href="QandAns.php" >Q & A</a>&nbsp;&nbsp;  
   <a href="Blog.php" >Blog</a>&nbsp;&nbsp; <a href="message.php" >Messages</a>&nbsp;&nbsp;
    <a href="job.php" >Job</a> &nbsp;&nbsp;  
   <a href="logout.php">Logout</a>  
   <div style="float:right;"><?php echo $_SESSION['UNAME']; ?></div>
    <!-- end .header --></div>
    