<?php
$root_path = './';
include($root_path . 'header.php');
include($root_path . 'include/db.php');

$package = filterSpecialCharacters($_POST['package']);
$domainPostfix = filterSpecialCharacters($_POST['domainPostfix']);
$price = 0;
if ($package == "BGN_WEB_HOST") {
	$price = 100;
} else if ($package == "ADV_WEB_HOST") {
	$price = 100;
} else if ($package == "ADV_EMAIL_HOST") {
	$price = 150;
} else if ($package == "MAIL_EXCHG_BASIC") {
	$price = 50;
} else if ($package == "MAIL_EXCHG_PLUS") {
	$price = 200;
} else if ($package == "DOMAIN") {
	$price = 45;
	if ($domainPostfix == "dotcc" || $domainPostfix == "dotcn" || $domainPostfix == "dotcomdotcn" || $domainPostfix == "dotnetdotcn" || $domainPostfix == "dotorgdotcn") {
		$price = 110;
	}
	if ($domainPostfix == "dothk") {
		$price = 130;
	}
	if ($domainPostfix == "doteu" || $domainPostfix == "dotcomdotmy" || $domainPostfix == "dotnetdotmy" || $domainPostfix == "dotorgdotmy") {
		$price = 100;
	}
	if ($domainPostfix == "dotcomdottw" || $domainPostfix == "dotorgdottw" || $domainPostfix == "dotidvdottw") {
		$price = 125;
	}
} else if ($package == "WEB_DESIGN") {
	$price = 450;
}
?>

<script language="Javascript" type="text/javascript">
function validateForm(myForm){
	if (myForm.package.selectedIndex == 0) {
		myForm.package.focus();
		alert("Please select the package you wish to order.");
		return false;
	} 
	if (myForm.package.selectedIndex == 5 && myForm.domain.value == "") {
		myForm.domain.focus();
		alert("Please enter the domain name.");
		return false;
	}
	if (myForm.quantity.value == "") {
		myForm.quantity.focus();
		alert("Please enter the quantity you wish to order.");
		return false;
	}
	if (isNaN(parseInt(myForm.quantity.value))) {
		myForm.quantity.focus();
		alert("Please enter the a numeric value for quantity.");
		return false;
	}
	if (myForm.name.value == "") {
		myForm.name.focus();
		alert("Please enter your name.");
		return false;
	}
	if (myForm.address.value == "") {
		myForm.address.focus();
		alert("Please enter your address.");
		return false;
	}
	if (myForm.tel.value == "") {
		myForm.tel.focus();
		alert("Please enter your phone number.");
		return false;
	}
	if (myForm.email.value == "") {
		myForm.email.focus();
		alert("Please enter your email address.");
		return false;
	}
	myForm.submit();
}

function refreshPrice(myForm){
	myForm.action = "order.php";
	myForm.submit();
}

function recalculate(myForm){
	if (myForm.quantity.value == "") {
		myForm.quantity.focus();
		alert("Please enter the quantity you wish to order.");
		return false;
	}
	if (isNaN(parseInt(myForm.quantity.value))) {
		myForm.quantity.focus();
		alert("Please enter the a numeric value for quantity.");
		return false;
	}
	myForm.total.value = parseInt(myForm.quantity.value) * parseInt(myForm.price.value);
}
</script>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="left" valign="top" bgcolor="#ffffff">
              <table width="100%">
                <tr>
                  <td align="left" class="genmed" colspan="2"><b>Order Form Help Menu</b></td>
                </tr>  
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Domain Name</b><br>
                  Please do not use more than 63 characters in the domain field, Use only hyphens, letters, and numbers also.
                  </td>
                </tr>  
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Company Name</b><br>
                  If you do not have a company name, please enter your full name.
                  </td>
                </tr> 
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>R.O.C. No</b><br>
                    This is only applicable if you want to register your .my domain with Mynic.<br>
					Please type "not applicable" if not required.
                  </td>
                </tr> 
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Address</b><br>
                    Please use this options to put your mailing address.<br>
					Please remember to include your street name, zip code or post code and country.
                  </td>
                </tr>
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Phone</b><br>
                    Please type in your telephone number here so that we can contact you when necessary.<br>
					Please remember to include your country and area code.
                  </td>
                </tr>
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Fax</b><br>
                    Please type in your fax number. <br>
					Please type "not applicable" if you do not have a fax number.
                  </td>
                </tr>  
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Email</b><br>
                    This is an important field that you need to insert. This email will be used as your contact point with 88NC. <br>
					Invalid email address will result in delay in registering your order.
                  </td>
                </tr>  
              </table>  
            </td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">ORDER FORM</font></div>
            		<hr>
            	  </td>
            	</tr>
                <tr>
                  <td colspan="2">
                    <form action="order_action.php" method="post" name="myForm">
                    <table>
                      <tr>
                        <td align="left" class="xsmalli" colspan="3"><font color="red">*</font> Denotes compulsory fields</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Order Information</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Order package <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left">
                          <select name="package" onChange="refreshPrice(this.form);">
                            <option value="">Please Select</option>
                            <option value="BGN_WEB_HOST" <?php if($package=="BGN_WEB_HOST") {echo "selected";}?>>Beginner Web Hosting</option>
                            <option value="ADV_WEB_HOST" <?php if($package=="ADV_WEB_HOST") {echo "selected";}?>>Advance Web Hosting</option>
                            <option value="ADV_EMAIL_HOST" <?php if($package=="ADV_EMAIL_HOST") {echo "selected";}?>>Advance Email Hosting</option>
                            <option value="MAIL_EXCHG_BASIC" <?php if($package=="MAIL_EXCHG_BASIC") {echo "selected";}?>>Secondary Mail Exchange Service (Basic)</option>
                            <option value="MAIL_EXCHG_PLUS" <?php if($package=="MAIL_EXCHG_PLUS") {echo "selected";}?>>Secondary Mail Exchange Service (Basic Plus)</option>
                            <option value="DOMAIN" <?php if($package=="DOMAIN") {echo "selected";}?>>Domain Name Registration</option>
                            <option value="WEB_DESIGN" <?php if($package=="WEB_DESIGN") {echo "selected";}?>>Webpage Design</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Domain Name <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left" class="genmed">www.<input type="text" name="domain" size="20" maxlength="50">.
                          <select name="domainPostfix" onChange="refreshPrice(this.form);">
		              	  <option name="dotcom">.com</option>
		              	  <option name="dotnet">.net</option>
		              	  <option name="dotinfo">.info</option>
		              	  <option name="dotorg">.org</option>
		              	  <option name="dotbiz">.biz</option>
		              	  <option name="dotcc">.cc</option>
		              	  <option name="dothk">.hk</option>
		              	  <option name="dottw">.tw</option>
		              	  <option name="dotus">.us</option>
		              	  <option name="doteu">.eu</option>
		              	  <option name="dotcomdotmy">.com.my</option>
		              	  <option name="dotnetdotmy">.net.my</option>
		              	  <option name="dotorgdotmy">.org.my</option>
		              	  <option name="dotcn">.cn</option>
		              	  <option name="dotcomdotcn">.com.cn</option>
		              	  <option name="dotnetdotcn">.net.cn</option>
		              	  <option name="dotorgdotcn">.org.cn</option>
		              	  <option name="dotcomdottw">.com.tw</option>
		              	  <option name="dotorgdottw">.org.tw</option>
		              	  <option name="dotidvdottw">.idv.tw</option>
		              	  </select>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Order Quantity <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left" class="genmed"><input type="text" name="quantity" size="10" maxlength="10" onchange="recalculate(this.form);">
                         X RM<?php echo $price;?> per year
                         <input type="hidden" name="price" value="<?php echo $price;?>">
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Your Total Is</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="total" size="10" readonly="true"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Personal Information</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Name <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="name" size="35" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Company Name</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="company" size="45" maxlength="150"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">R.O.C No</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="roc" size="35" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Address <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><textarea name="address" cols="40" rows="5"></textarea></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Phone <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="tel" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Fax</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="fax" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Email <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="email" size="35" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="genmed" colspan="3">
                          <input class="genbutton" type="button" value="ORDER" onclick="validateForm(this.form);">
                          <input class="genbutton" type="reset" value="RESET">
                        </td>
                      </tr>
                    </table>
                    </form>
            	  </td>
            	</tr>
                <tr>
                  <td colspan="2" class="genmed">
            		<hr><br>
            		<b>Payment can be made by:</b><br> 
					- Crossed cheque or cash payable to <b>EIGHTY EIGHT NETWORK &amp; COMMUNICATIONS</b> <br>
					- Direct Deposit the payment into our Maybank current account number “<b>5122-3132-2060</b>”. 
					Please scan and send us the Bank-in slip by post or email, and do not forget to write down your ordered package, name and company name.
            	  </td>
            	</tr>
              </table>	  
		    </td>
          </tr>
        </table>
<?php
include($root_path . 'footer.html');
?>        