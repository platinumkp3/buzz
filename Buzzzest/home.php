<?php
session_start();
include "includes/check_session.php";
require "header.php";

$uname=$_SESSION['UNAME'];

?>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Link one</a></li>
      <li><a href="#">Link two</a></li>
      <li><a href="#">Link three</a></li>
      <li><a href="#">Link four</a></li>
    </ul>
    <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
    <p>If you would like the navigation along the top, simply move the ul.nav to the top of the page and recreate the styling.</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
<div style="width:100%" >
Anything to share? 
<form name="frmshare" method="post" >
<textarea name="share" id="share" rows="3" cols="60"  autofocus="autofocus" ></textarea>
</form>
</div>	
<div id="homemenu">
<a href="" >Updates</a>&nbsp;&nbsp;<a href="" >List</a>&nbsp;&nbsp;<a href="" >Friends</a>&nbsp;&nbsp;
<a href="" >Following</a>
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


     <!-- end .content --></div>
     
   
<?php
require "footer.php";
?>