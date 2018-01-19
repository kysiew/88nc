<?php
$root_path = './';
include($root_path . 'session.php');
include($root_path . 'header.php');
include($root_path . 'include/db.php');

function convertStatus($sid) {
	if ($sid == "0")
	{
		return "New";
	}
	if ($sid == "1")
	{
		return "Replied";
	}
	if ($sid == "2")
	{
		return "Completed";
	}
	if ($sid == "3")
	{
		return "Junk/KIV";
	}
	return "";
}

$sql = "SELECT id, companyName, companyRegNo, email, status FROM freewebsite ORDER BY companyName ASC";
$result = $db->sql_query($sql);
?>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="center" valign="top" bgcolor="#ffffff">
<?php
include($root_path . 'admin_sitebar.html');
?>              
			  <br>
            </td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">FREE WEBSITE SUBSCRIBERS LIST</font></div>
            		<hr>
            	  </td>
            	</tr>
		        <tr colspan="2" valign="top">
		          <td width="100%" align="right">
		          <table width="100%" border="1" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
			        <tr valign="center">
			          <td width="30%" class="gen" bgcolor="#67657e" align="center" height="20">Company Name</td>
			          <td width="30%" class="gen" bgcolor="#67657e" align="center" height="20">Company Registration No.</td>
			          <td width="30%" class="gen" bgcolor="#67657e" align="center" height="20">Email</td>
			          <td width="10%" class="gen" bgcolor="#67657e" align="center" height="20">Status</td>
			        </tr>
		<?php
		while ($row = $db->sql_fetchrow($result))
		{
			echo '<tr valign="center">
			          <td align="left" height="20"><div class="genmed"><font color="#000000"><a href="admin_freeWebsite.php?id=' . $row['id'] . '">' . $row['companyName'] . '</a></font></div></td> 
			          <td align="left"><div class="genmed"><font color="#000000">' . $row['companyRegNo'] . '</font></div></td> 
			          <td align="left"><div class="genmed"><font color="#000000">' . $row['email'] . '</font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000">' . convertStatus($row['status']) . '</font></div></td> 
			        </tr>';
		}
		$db->sql_freeresult($result);
		?>
			      </table>  
			      </td>
		        </tr>
              </table>	  
		    </td>
          </tr>
        </table>
<?php
include($root_path . 'footer.html');
?>        