<?php

?>
<link href="css/home.css" type="text/css" />
<div>
Buzzzest <br />
Lets Buzz & Zest Your World 
<div style="float:right"><a href="index.php" >Home</a> </div>
</div>
<br />
<div id="divborder">
<table width="439" height="393"  align="center" cellpadding="0" cellspacing="0"  border="1">
  <tr>
    <td width="160">Select Your Account:</td>
    <td width="241">
    <select name="account" > 
    <option value="0" >Select</option>
    <option value="1" >Individual</option>
    <option value="2" >Organization</option>    
    </select>
    </td>
  </tr>
  <tr>
    <td>Full Name:</td>
    <td><input type="text" name="fullname" id="fullname" /></td>
  </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="user_name" id="user_name" /></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><input type="email" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td>Gender :</td>
    <td> <select name="gender" > 
    <option value="0" >Select</option>
    <option value="1" >Male</option>
    <option value="2" >Female</option>    
    </select></td>
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
  </tr>
  <tr>
    <td>Place: </td>
    <td><input type="place" name="place" id="place" /></td>
  </tr>
  <tr>
    <td>Interests :</td>
    <td><input type="interest" name="interest" id="interest" /></td>
  </tr>
  <tr>
    <td>Occupation :</td>
    <td><input type="occupation" name="occupation" id="occupation" /></td>
  </tr>
  <tr>
    <td>Industry :</td>
    <td><input type="industry" name="industry" id="industry" /></td>
  </tr>
  <tr>
    <td>Bio :</td>
    <td><textarea name="bio" id="bio" rows="3" cols="25"></textarea></td>
  </tr>
  <tr>
    <td>Website :</td>
    <td><input type="text" name="website" id="website" /></td>
  </tr>
  <tr>
   <td colspan="2" align="center"><input type="checkbox"  checked="checked"  />I agree th terms of Services</td>
  </tr>
  <tr>
   <td align="center" ><input type="submit" value="Finish" name="Finish" id="Finish" /></td>
   <td>&nbsp;</td>
  </tr>
</table>
</div>