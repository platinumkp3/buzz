<?php
session_start();
include "includes/check_session.php";
require "header.php";

$uname=$_SESSION['UNAME'];

?>
  <div class="sidebar1">
   <div  >
   <table width="100%" height="100%" cellpadding="0" cellspacing="0" id="tableborder" >
	
    <tr>
    <td width="12%" valign="top"><img src="images/female.jpg" width="100" height="100"  /></td>
    <td width="88%" colspan="2" valign="top">
    <table  width="80%" height="80%" cellpadding="0" cellspacing="0"> 
    <tr><td colspan="4" align="left"><h3><?php echo $uname; ?></h3></td></tr>
     <tr id="trbordertop"><td width="24%" id="tdborderlefttop" >Updates</td><td width="26%" id="tdbordertop" >Friends</td><td width="31%" id="tdbordertop" >Followings</td><td width="19%" id="tdborderrighttop" >Followers</td></tr>
     <tr><td id="tdborderleftbottom">&nbsp;</td><td id="tdborderbottom" >&nbsp;</td><td id="tdborderbottom" >&nbsp;</td><td id="tdborderrightbottom">&nbsp;</td></tr>
    </table>
   
    </td>
    </tr>
    
   
</table>
   </div>
   
   <div id="content_post">
<table width="100%" height="100%" cellpadding="0" cellspacing="0" id="tableborder" >
	<tr>
    <td width="15%">&nbsp;</td><td width="85%"><b><?php echo $uname;?></b></td><td width="2%"><img src="images/valid.png"  /></td>
    </tr>
    <tr>
    <td valign="top"><img src="images/bee2.gif" width="60" height="60"  /></td><td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </td>
    </tr>
     <tr>
    <td>&nbsp;</td><td colspan="2">3 hours ago .<a href="">Like</a>.<a href="">Comment</a>.<a href="">Share</a>.
    <a href="">Delete</a> </td>
    </tr>
     
</table>
</div>
  <!-- end .sidebar1 --></div>
  <div class="content">
   <div id="homemenu">&nbsp;&nbsp;<a href="" >Updates</a>&nbsp;&nbsp;<a href="" >Info</a>&nbsp;&nbsp;<a href="">Blog</a>&nbsp;&nbsp;
   <a href="">Q & A</a>&nbsp;&nbsp;<a href="">Photos</a></div>
   <div id="content_post">
   <table width="100%" height="100%" cellpadding="0" cellspacing="0" id="tableborder" >
	<tr>
    <td width="15%">&nbsp;</td><td width="85%"><b><?php echo $uname;?></b></td><td width="2%"><img src="images/valid.png"  /></td>
    </tr>
    <tr>
    <td valign="top"><img src="images/bee2.gif" width="60" height="60"  /></td><td colspan="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </td>
    </tr>
     <tr>
    <td>&nbsp;</td><td colspan="2">3 hours ago .<a href="">Like</a>.<a href="">Comment</a>.<a href="">Share</a>.
    <a href="">Delete</a> </td>
    </tr>
     
</table>
</div>

  <!-- end .content --></div>
<?php
require "footer.php";
?>