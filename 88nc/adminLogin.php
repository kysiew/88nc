<?php
$root_path = './';
include($root_path . 'include/db.php');

session_start();

$warning = "";
if (isset($_POST['userid']) && isset($_POST['password']))
{
  	// if the user has just tried to log in
  	$userid = $_POST['userid'];
  	$password = $_POST['password'];
  	
  	$sql = "select * from authorised_users where name='$userid' and password=sha1('$password')";

	$result = $db->sql_query($sql);
  	if (mysql_num_rows($result) >0 )
  	{
    	// if they are in the database register the user id
    	$_SESSION['valid_user'] = $userid;    
  	}
  	else
  	{
	  	$warning = "Invalid ID or password.<br>Please try again.";
  	}
	$db->sql_freeresult($result);
}
if (isset($_SESSION['valid_user']))
{
	header('Location: ' . $root_path . 'admin_freeWebsiteList.php');
}
include($root_path . 'header.php');
?>
<script language="JavaScript" type="text/javascript">
function checkForm(myForm){
	if (myForm.userid.value == "") {
		alert("Userid is compulsory.");
		return false;
	}
	if (myForm.password.value == "") {
		alert("Password is compulsory.");
		return false;
	}
	return true;
}
</script>

  	  <!--main content start-->
      <table width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td colspan="3" width="100%" align="left">&nbsp;</td>
        </tr>

<? 
if (!isset($_SESSION['valid_user']))
{
?>
		<form method="post" action="adminLogin.php" onsubmit="return checkForm(this)">
        <tr>
          <td colspan="3" width="100%" align="center">
            <div class="xsmall"><font color="red"><? echo $warning; ?></font></div><br>
            <table width="300" cellspacing="0" cellpadding="0" border="1" borderColor="#000000">
              <tr><td width="100%">
              	<table width="100%">
		        <tr>
		          <td colspan="3" width="100%" align="center">&nbsp;</td>
		        </tr>
		        <tr valign="top">
		          <td width="30%" align="right" bgcolor="#FFFFFF" class="genmed">Userid</td>
		          <td width="5%" align="" bgcolor="#FFFFFF">:</td>
		          <td width="65%" align="left" bgcolor="#FFFFFF"><input type="text" name="userid"></td>
		        </tr> 
		        <tr valign="top">
		          <td width="30%" align="right" bgcolor="#FFFFFF" class="genmed">Password</td>
		          <td width="5%" align="center" bgcolor="#FFFFFF">:</td>
		          <td width="65%" align="left" bgcolor="#FFFFFF"><input type="password" name="password"></td>
		        </tr> 
		        <tr>
		          <td colspan="3" width="100%" align="center"><input type="submit" value="Log in"></td>
		        </tr>
		        <tr>
		          <td colspan="3" width="100%" align="center">&nbsp;</td>
		        </tr>
		        </table>
		      </td></tr>
	        </table>
	      </td>
        </tr>
        </form>
<?    
}
?>
  	  </table>
  	  <br><br>
<?php
include($root_path . 'footer.html');
?>        