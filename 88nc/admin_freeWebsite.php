<?php
$root_path = './';
include($root_path . 'session.php');
include($root_path . 'header.php');
include($root_path . 'include/db.php');

$id = $_GET['id'];
$companyName = "";
$companyRegNo = "";
$personInCharge = "";
$position = "";
$phone = "";
$fax = "";
$email = "";
$contactvia = "";
$specialization = "";
$status = "";
$remark = "";
$ipaddress = "";

if ($id != "")
{
	$sql = "SELECT * FROM freewebsite WHERE ID=".$id;
	$result = $db->sql_query($sql);
	if ($row = $db->sql_fetchrow($result))
	{
		$companyName = $row['companyName'];
		$companyRegNo = $row['companyRegNo'];
		$personInCharge = $row['personInCharge'];
		$position = $row['position'];
		$phone = $row['phone'];
		$fax = $row['fax'];
		$email = $row['email'];
		$contactvia = $row['contactvia'];
		$specialization = $row['specialization'];
		$status = $row['status'];
		$remark = $row['remark'];
		$ipaddress = $row['ipaddress'];
	}
}
?>

<script language="Javascript" type="text/javascript">
function deleteEnquiry(myForm){
	myForm.deleteFlag.value="1";
	myForm.submit();
}
</script>
  	  <form action="admin_freeWebsite_action.php" method="post" name="myForm">
  	  <input type="hidden" name="id" value="<?php echo $id;?>">
  	  <input type="hidden" name="deleteFlag" value="0">
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
            		<div class="gen"><font color="#51bb56">FREE WEBSITE SUBSCRIBER</font></div>
            		<hr>
            	  </td>
            	</tr>
		        <tr colspan="2" valign="top">
		          <td width="100%" align="right">
		          <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
			        <tr valign="center">
			          <td width="100%" align="right" colspan="3" class="genmed" bgcolor="#FFFFFF" height="20">
			          <font color="red">*</font> Denotes compulsory fields</td>
			        </tr>
			        <tr valign="center">
			          <td width="100%" align="left" colspan="3" height="20">&nbsp;</td>
			        </tr>
			        <tr valign="top">
			          <td width="30%" align="right"><div class="genmed"><b> <font color="#000000">Company Name</b></font></div></td> 
			          <td width="5%" align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td width="65%" align="left"><div class="genmed"><?php echo $companyName;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Company Registration No.</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $companyRegNo;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Person In Charge</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $personInCharge;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Position</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $position;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Phone</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $phone;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Fax</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $fax;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Email</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $email;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Preferable contact via </b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $contactvia;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Specialization</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $specialization;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><font color="red"><b>*</font> <font color="#000000">Status</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed">
			            <select name="status">
			              <option value="0" <?php if($status=="0") echo "selected";?>>New</option>
			              <option value="1" <?php if($status=="1") echo "selected";?>>Replied</option>
			              <option value="2" <?php if($status=="2") echo "selected";?>>Completed</option>
			              <option value="3" <?php if($status=="3") echo "selected";?>>Junk/KIV</option>
			            </select>
			          </div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">IP Address</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><?php echo $ipaddress;?></div></td> 
			        </tr>
			        <tr valign="top">
			          <td align="right"><div class="genmed"><b> <font color="#000000">Remark</b></font></div></td> 
			          <td align="center"><div class="genmed"><font color="#000000"><b>:</b></font></div></td> 
			          <td align="left"><div class="genmed"><textarea name="remark" rows="10" cols="50"><?php echo $remark;?></textarea></div></td> 
			        </tr>
			        <tr valign="center">
			          <td width="100%" align="left" colspan="3" height="20">&nbsp;</td>
			        </tr>
			        <tr valign="center">
			          <td width="100%" align="center" colspan="3" height="20">
			          <input class="genbutton" type="submit" value="Save">
		<?php
		if ($id != ""){
		?>	
			          <input class="genbutton" type="button" value="Delete" onclick="deleteEnquiry(this.form);">
		<?php	          
		}
		?>	          
			          </td>
			        </tr>
			        <tr valign="center">
			          <td width="100%" align="left" colspan="3" height="20">&nbsp;</td>
			        </tr>
			      </table>  
			      </td>
		        </tr>
              </table>	  
		    </td>
          </tr>
        </table>
  	  </form>
<?php
include($root_path . 'footer.html');
?>        