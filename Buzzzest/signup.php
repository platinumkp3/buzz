<html>
<link href="css/home.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.2.js" type="application/javascript" >
</script>
<script src="js/signup.js" type="application/javascript" >
</script>
<script type="application/javascript" >
$(document).ready(function() {
   $('#div2').hide("");	
   $('#div3').hide("");	
   $("#div2").css({"dispaly":"none"});
   $("#div3").css({"dispaly":"none"});   
 });
 
 function fnselchange()
 {	 
 	 var a=document.getElementById("account").value;
	 $("#div1").css("display","none");
	 $("#div2").css("display","none");
	 $("#div3").css("display","none");
	 $("#div"+a).css("display","block");
 }
</script>
<body>
<div>
<div style="float:right"><a href="index.php" >Home</a> </div>
Buzzzest <br />
Lets Buzz & Zest Your World 

</div>
<br />
<div id="divborder">
<form  method="post" name="frmaccount" action="saveaccount.php" id="frmaccount" onSubmit="return valOther();" accept-charset='UTF-8' >
  <table width="485" height="30"  border="1"  align="center" cellpadding="0" cellspacing="0" >
    <tr>
        <td width="167">Select Your Account:</td>
        <td width="278">
        <select name="account" id="account" onChange="fnselchange()" >
            <option value="1" >Individual</option>
            <option value="2" >Organization</option>    
            <option value="3" >Groups</option>    
        </select>
        </td>
    </tr>
 </table> 

<div id="div1">
<table width="486" height="393"  align="center" cellpadding="0" cellspacing="0"  border="1">
  <tr>
    <td width="116">Full Name:</td>
    <td width="231"><input type="text" name="fullname" id="fullname"  /></td>
     <td width="131"><label type="hidden" name="errorfullname" id="errorfullname" /></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="user_name" id="user_name" /></td>
      <td><label type="hidden" name="erroruser_name" id="erroruser_name" /></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><input type="email" name="email" id="email" /></td>
        <td><label type="hidden" name="erroremail" id="erroremail" /></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" id="password" /></td>
    <td><label type="text" name="errorpassword" id="errorpassword" /></td>
  </tr>
  <tr>
    <td>Gender :</td>
    <td><select name="gender" id="gender" > 
            <option value="0" >Select</option>
            <option value="1" >Male</option>
            <option value="2" >Female</option>    
        </select>
    </td>
    <td><label type="hidden" name="errorgender" id="errorgender" /></td>
  </tr>
  <tr>
    <td>Date of Birth</td>
    <td><select name="bird">
        <option value="dd">dd</option>
            <?php
                for($i=1;$i<=31;$i++)
                {
                    echo "<option value='".$i."'>".$i."</option>";
                }						
                ?>
        </select>/
        <select  name="birm">
        <option value="mm">mm</option>
            <?php
                for($i=1;$i<=12;$i++)
                {
                    echo "<option value='".$i."'>".$i."</option>";
                }						
                ?>
        </select>/
        <select  name="biry">
        <option value="yyyy">yyyy</option>
                <?php
                $year=Date("Y");
                $i=$year-50;
                for($i=$year-45;$i<=($year-10);$i++)
                {
                    echo "<option value='".$i."'>".$i."</option>";
                }						
                ?>
        </select></td> 
          <td><label type="text" name="errordob" id="errordob" /></td>
  </tr>
  <tr>
    <td>Place: </td>
    <td><input type="text" name="place" id="place" /></td> 
    <td><label type="text" name="errorplace" id="errorplace" /></td> 
  </tr>
  <tr>
    <td>Interests :</td>
    <td><input type="text" name="interest" id="interest" /></td>
    <td><label type="text" name="errorinterest" id="errorinterest" /></td>
  </tr>
  <tr>
    <td>Occupation :</td>
    <td><input type="text" name="occupation" id="occupation" /></td>
    <td><label type="text" name="erroroccupation" id="erroroccupation" /></td>
  </tr>
  <tr>
    <td>Industry :</td>
    <td><input type="text" name="industry" id="industry" /></td>
    <td><label type="text" name="errorindustry" id="errorindustry" /></td>
  </tr>
  <tr>
    <td>Bio :</td>
    <td><textarea name="text" id="bio" rows="3" cols="25"></textarea></td>
    <td><label type="text" id="errorbio" name="errorbio"/></td>
  </tr>
  <tr>
    <td>Website :</td>
    <td><input type="text" name="website" id="website" /></td>
    <td><label type="text" name="errorwebsite" id="errorwebsite" /></td>
  </tr>
  <tr>
   <td colspan="3" align="center"><input type="checkbox" name="terms" checked="checked"  />I agree the terms of Services</td>
  </tr>
  <tr>
   <td align="center" colspan="3" ><input type="submit" value="Finish" name="finish_div1" id="finish_div1" /></td>
 
  </tr>
</table>
</div>

<div id="div2">
<table width="486" height="364"  align="center" cellpadding="0" cellspacing="0"  border="1">
  <tr>
    <td width="119">Name</td>
    <td width="228"  ><input type="text" name="name" id="name" /></td>
     <td width="131"  ><label type="text" name="errorname" id="errorname" /></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="user_name" id="user_name" /></td>
      <td><label type="text" name="erroruser_name" id="erroruser_name" /></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><input type="email" name="email" id="email" /></td>
    <td><label type="text" name="erroremail" id="erroremail" /></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" id="password" /></td>
    <td><label type="text" name="errorpassword" id="errorpassword" /></td>
  </tr>
  <tr>
    <td>Description:</td>
    <td><textarea name="description" id="description" rows="3" cols="25"></textarea></td>
    <td><label type="text"  name="errordescription" id="errordescription" /></td>
  </tr>
  <tr>
    <td>Website :</td>
    <td><input type="text" name="website" id="website" /></td>
    <td><label type="text" name="errorwebsite" id="errorwebsite" /></td>
  </tr>
  <tr>
   <td height="24" colspan="3" align="center"><input type="checkbox" name="terms"  checked="checked"  />I agree the terms of Services</td>
  </tr>
  <tr>
   <td height="36" colspan="3" align="center" ><input type="submit" value="Finish" name="finish_div2" id="finish_div2" /></td>
  </tr>
</table>

</div>

<div id="div3">
<table width="485" height="393"  align="center" cellpadding="0" cellspacing="0"  border="1">
  <tr>
    <td width="108" >Name:</td>
    <td width="237"><input type="text" name="name" id="name" /></td>
     <td width="132" ><label type="text" name="errorname" id="errorname" /></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="user_name" id="user_name" /></td>
     <td><label type="text" name="erroruser_name" id="erroruser_name" /></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><input type="email" name="email" id="email" /></td>
    <td><label type="text" name="erroremail" id="erroremail" /></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" id="password" /></td>
    <td><label type="text" name="errorpassword" id="errorpassword" /></td>
  </tr>
  <tr>
    <td>Founded</td>
    <td><input type="text" name="founded" id="founded" /></td>
    <td><label type="text" name="errorfounded" id="errorfounded" /></td>
  </tr>
  <tr>
    <td>Overview</td>
    <td><textarea name="overview" id="overview" rows="3" cols="25" ></textarea></td> 
    <td><label type="text" name="erroroverview" id="erroroverview" /></td> 
  </tr>
  <tr>
    <td>Tagline :</td>
    <td><input type="text" name="tagline" id="tagline" /></td>
    <td><label type="text" name="errortagline" id="errortagline" /></td>
  </tr>
  <tr>
    <td>Type :</td>
    <td><input type="text" name="type_val" id="type_val" /></td>
    <td><label type="text" name="errortype_val" id="errortype_val" /></td>
  </tr>
  <tr>
    <td>Mission :</td>
    <td><textarea name="mission" id="mission" rows="3" cols="25" ></textarea></td>
    <td><label type="text" name="errormission" id="errormission" /></td>
  </tr>
  <tr>
    <td>Industry :</td>
    <td><input type="text" name="industry" id="industry" /></td>
     <td><label type="text" name="errorindustry" id="errorindustry" /></td>
  </tr>
  <tr>
    <td>Specialities :</td>
    <td><textarea name="specialities" id="specialities" rows="3" cols="25"></textarea></td>
    <td><label  type="text" name="errorspecialities" id="errorspecialities" /></td>
  </tr>
  <tr>
    <td>Employee Count :</td>
    <td><input type="text" name="empcount" id="empcount" /></td>
    <td><label type="text" name="errorempcount" id="errorempcount" /></td>
  </tr>
   <tr>
    <td>Location:</td>
    <td><input type="text" name="location" id="location" /></td>
     <td><label type="text" name="errorlocation" id="errorlocation" /></td>
  </tr>
   <tr>
    <td>Website:</td>
    <td><input type="text" name="website" id="website" /></td>
      <td><label type="text" name="errorwebsite" id="errorwebsite" /></td>
  </tr>
  <tr>
   <td colspan="3" align="center"><input type="checkbox" name="terms" checked="checked"  />I agree the terms of Services</td>
  </tr>
  <tr>
   <td align="center" colspan="3"><input type="submit" value="Finish"  name="finish_div3" id="finish_div3" /></td>
  </tr>
</table>
</div>
</form>

</div>
</body>
</html>