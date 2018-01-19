<?php
$root_path = './';
include($root_path . 'header.php');
include($root_path . 'include/db.php');

$package = filterSpecialCharacters($_POST['package']);
$domainPostfix = filterSpecialCharacters($_POST['domainPostfix']);
?>

<script language="Javascript" type="text/javascript">
function validateForm(myForm){
	if (myForm.email.value == "") {
		myForm.email.focus();
		alert("Please enter your email address.");
		return false;
	}
	if (myForm.password.value == "") {
		myForm.password.focus();
		alert("Please enter your password.");
		return false;
	}
	if ((myForm.password.value.length < 5) || (myForm.password.value.length > 10)) {
		myForm.password.focus();
		alert("Password must between 5 and 10 characters.");
		return false;
	}
	if (myForm.password2.value == "") {
		myForm.password2.focus();
		alert("Please enter your retype password.");
		return false;
	}
	if (myForm.password.value != myForm.password2.value) {
		myForm.password2.focus();
		alert("Password and retype password must be equal.");
		return false;
	}
	if (myForm.question.selectedIndex == 0) {
		myForm.question.focus();
		alert("Please select the question.");
		return false;
	}
	if (myForm.answer.value == "") {
		myForm.answer.focus();
		alert("Please enter your secret answer.");
		return false;
	}
	if (myForm.account.selectedIndex == 0) {
		myForm.account.focus();
		alert("Please select the Account Option.");
		return false;
	} 
	if (myForm.account.selectedIndex == 1) {//validation for personal account
		if (myForm.name.value == "") {
			myForm.name.focus();
			alert("Please enter your name.");
			return false;
		}
		if (myForm.nric.value == "") {
			myForm.nric.focus();
			alert("Please enter your NRIC/Passport No.");
			return false;
		}
		if (myForm.year.value != "" && isNaN(parseInt(myForm.year.value))) {
			myForm.year.focus();
			alert("Please enter the a numeric value for birth date:year.");
			return false;
		}
	} else {
		if (myForm.company.value == "") {
			myForm.company.focus();
			alert("Please enter your Company Name.");
			return false;
		}
		if (myForm.roc.value == "") {
			myForm.roc.focus();
			alert("Please enter your R.O.C No.");
			return false;
		}
	}
	if (myForm.tel.value == "") {
		myForm.tel.focus();
		alert("Please enter your phone number.");
		return false;
	}
	if (myForm.address.value == "") {
		myForm.address.focus();
		alert("Please enter your address.");
		return false;
	}
	if (myForm.agree.checked == false) {
		myForm.agree.focus();
		alert("You must agree with the Terms of Service in order to proceed the registration.");
		return false;
	}
	myForm.submit();
}
</script>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="left" valign="top" bgcolor="#ffffff">
              <table width="100%">
                <tr>
                  <td align="left" class="genmed" colspan="2"><b>Registration Form Help Menu</b></td>
                </tr>  
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Email</b><br>
                    This is an important field that you need to insert. This email will be used as your login ID to access 88NC portal. <br>
					Invalid email address will result in delay in registering your order.
                  </td>
                </tr>
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Password</b><br>
                  Please enter a password with minimum length of 5 and maximum length of 10.
                  </td>
                </tr> 
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Retype Password</b><br>
                    This retype password must be same as the password.
                  </td>
                </tr> 
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Question &amp; Secret Answer</b><br>
                    These two fields will be used as authentication points when you want to retrieve your login ID and password .
                  </td>
                </tr>
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>Account Option</b><br>
                    If this is a personal account, please complete the information needed in Personal Accounr and General Information. Else, please complete the information needed in Company Accounr and General Information.
                  </td>
                </tr>
			    <tr>
			      <td colspan="2" height="10" align="left" valign="middle" background="images/new_dash.gif"></td>
			    </tr> 
                <tr>
                  <td align="left" class="gensmall" valign="top"><img src="images/new_arrow.gif" width="5" height="7"></td>
                  <td align="left" class="gensmall"><b>NRIC/Passport No</b><br>
                    If you are Malaysian, please enter your NRIC no. Else, please enter your passport no.
                  </td>
                </tr>  
              </table>  
            </td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">REGISTRATION FORM</font></div>
            		<hr>
            	  </td>
            	</tr>
                <tr>
                  <td colspan="2">
                    <form action="profile_action.php" method="post" name="myForm" onsubmit="validateForm(this.form);">
                    <table>
                      <tr>
                        <td align="left" class="xsmalli" colspan="3"><font color="red">*</font> Denotes compulsory fields</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Login ID And Password</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Email <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="email" size="35" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Password <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="password" name="password" size="35" maxlength="10"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Retype Password <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="password" name="password2" size="35" maxlength="10"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Password reset options</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Question <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left">
                          <select name="question_id">
                            <option value="0">Please Select</option>
                            <option value="1">Mother&#39;s birthplace</option>
                            <option value="2">Best childhood friend</option>
                            <option value="3">Name of first pet</option>
                            <option value="4">Favorite teacher</option>
                            <option value="5">Favorite historical person</option>
                            <option value="6">Car plate number</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Secret Answer <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="answer" size="35" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Account Information</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Account Option <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left">
                          <select name="account_id">
                            <option value="">Please Select</option>
                            <option value="">Company</option>
                            <option value="">Personal</option>
                          </select>  
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3"><b><i><u>Personal Account</u></i></b></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Name <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="name" size="35" maxlength="150"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">NRIC/Passport No <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="nric" size="35" maxlength="30"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Gender</td>
                        <td align="center">:</td>
                        <td align="left" class="genmed"><input type="radio" name="sex" value="M">Male&nbsp;<input type="radio" name="sex" value="F">Female</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Birth Date</td>
                        <td align="center">:</td>
                        <td align="left">
                          <select name="birth_month">
                            <option value="">Month</option>
                            <option value="">Jan</option>
                            <option value="">Feb</option>
                            <option value="">Mar</option>
                            <option value="">Apr</option>
                            <option value="">May</option>
                            <option value="">Jun</option>
                            <option value="">Jul</option>
                            <option value="">Aug</option>
                            <option value="">Sept</option>
                            <option value="">Oct</option>
                            <option value="">Nov</option>
                            <option value="">Dec</option>
                          </select>
                          <select name="birth_day">
                            <option value="">Day</option>
                            <?php 
                            for($i=1; $i<32; $i++) {
	                            echo "<option value=\"$i\">$i</option>";
                            }
                            ?>
                          </select>
                          <input type="text" name="birth_year" value="" size="10">
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3"><b><i><u>Company Account</u></i></b></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Company Name <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="company" size="45" maxlength="150"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">R.O.C No. <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="roc" size="35" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Fax</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="fax" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3"><b><i><u>General Information</u></i></b></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Phone <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="tel" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Address <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><textarea name="address" cols="33" rows="5"></textarea></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="gen" colspan="3" background="images/bluebar.gif">Terms of Service</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">
                        <div style="overflow:auto; height:150px; width:400px;border: 1px solid #CDCDCD; ">
                        <b><u>Service Agreement for Web & Email Hosting</u></b><br><br>

						The following agreement is between Eighty Eight Network & Communications ("88NC") and You ("client").<br><br>
						
						WHEREAS, 88NC is an information provider connected to the Internet. 88NC offers web hosting and email server hosting services over the Internet through access to its Web Server;<br>
						WHEREAS, Client seeks to utilize 88NC's server for its own purposes;<br><br>
						
						WHEREAS, the parties acknowledge that the Internet is neither owned nor controlled by any one entity; therefore, 88NC can make no guarantee that any given reader shall be able to access 88NC's server at any given time. 88NC represents that it shall make every good faith effort to ensure that its server is available as widely as possible and with as little service interruption as possible;<br><br>
						
						NOW THEREFORE, in consideration of the mutual promises contained herein, the parties agree as follows;<br><br>
						
						<b>I. Financial Arrangements</b><br><br>						
						1. Client agrees to a minimum one (1) year contract, beginning upon 88NC's receipt of payment for the first year of service.<br><br>
						2. First year payment plus setup charges, if any, shall be due in advance of service. Whilst our pricing may be broken down to a monthly figure, all accounts are payable yearly in advance. The account cannot be transferred or used by anyone other than the subscriber<br><br>
						3. This agreement will automatically renew for successive one (1) year period unless canceled in writing 14 days prior to the annual renewal date. Written notice may be by postal, the 88NC form or fax transmission. Renewal prices are subject to change. Renewal of services by Client indicates agreement to any Contract revisions.<br><br>
						4. Renewal fees for the following term will be paid by cash. Payments may also be made by cheque. Returned cheque are subject to a RM50.00 returned cheque fee.<br><br>
						5. Accounts that have unpaid invoices more than 30 days past the renewal date will be suspended without notice until the account is brought current. 88NC reserves the right to terminate the account and delete the files. 88NC reserves the right to apply a RM50.00 reconnection fee to all suspended accounts. Suspension does NOT release client of the responsibility for payment of the account and monies due.<br><br>
						6. In any case where Client has exceeded the allocated free quota of web space, 88NC reserve the right to bill the extra web space used accordance with the standard price list.<br><br>
						7. Furnishing false data on any contract or application, including fraudulent use of credit card numbers, is grounds for immediate termination, and may subject the offender to civil or criminal liability.<br><br>
						
						<b>II. Taxes</b><br><br>		
						88NC shall not be liable for any taxes or other fees to be paid in accordance with or related to purchases made from Client or 88NC's server. Client agrees to take full responsibility for all taxes and fees of any nature associated with such products sold.<br><br>
						
						<b>III. Material and Products</b><br><br>						
						88NC will exercise no control whatsoever over the content of the information passing through the network except for what is noted in Section X of this agreement. 88NC will not host any material that is, in 88NC sole discretion, judged as unlawful, threatening, pornographic, political, abusive, libelous, or encourages conduct that would constitute a criminal offense, give rise to civil liability, or otherwise violate any local, state, national or international law. Please contact 88NC if uncertain of the nature of your content. 88NC makes no warranties or representations of any kind, whether expressed or implied for the service it is providing.<br><br>
						88NC also disclaims any warranty of merchantability or fitness for particular purpose and will not be responsible for any damages that may be suffered by the Client, including loss of data resulting from delays, non-deliveries or service interruptions by any cause or errors or omissions of the Client. Use of any information obtained by way of 88NC is at the Client's own risk, and 88NC specifically denies any responsibility for the accuracy or quality of information obtained through its services.<br><br>
						Connection speed represents the speed of a connection to and do not represent guarantees of available end to end bandwidth. 88NC expressly limits its damages to the Client for any non-accessibility time or other down time to the pro- rata monthly charge during the system unavailability. 88NC specifically denies any responsibilities for any damages arising as a consequence of such unavailability.<br><br>
						Client may not run background processes on 88NC's servers. Violations of this policy will result in a user's background processes being killed, and may result in account suspension.<br><br>
						
						<b>IV. Trademarks & Copyrights</b><br><br>
						Client warrants that it has the right to use any applicable trademarks or copyrighted material used in connection with this service.<br><br>
						
						<b>V. Age</b><br><br>
						The Customer certifies that he or she is at least 18 years of age.<br><br>
						
						<b>VI. Internet Etiquette</b><br><br>						
						1. Electronic forums such as mail distribution lists all have expectations regarding subject area and appropriate etiquette for posting. Users of these forums should be considerate of the expectations and sensitivities of others on the network when posting material for electronic distribution. The network resources of 88NC may not be used to impersonate another person or misrepresent authorization to act on behalf of others or 88NC. All messages transmitted via 88NC should correctly identify the sender; users may not alter the attribution of origin in electronic mail messages or posting. Users must not attempt to undermine the security or integrity of computing systems or networks and must not attempt to gain unauthorized access.<br><br>
						2. 88NC does not permit the transmission of unsolicited e-mail. Complaints or allegations regarding the abuse of e-mail will be investigated. If it is found that the client has engaged in the intentional transmission of unsolicited e-mail, a warning to cease and desist will be issued. Subsequent violations will result in suspension and/or termination of the account.<br><br>
						3. Software items that result in denial of service are not fit for use. 88NC reserves the right to delete those files.<br><br>
						4. Clients may not use the account as storage facility or as a download site for MP3, softwares, offer free emails, free websites, free banner exchange services or any large scale free services. Customer may also not run any kind of chat script or create any kind of chating site using the hosting service.<br><br>
						
						<b>VII. Privacy</b><br><br>						
						88NC will make every effort to protect the privacy of 88NC's clients. 88NC will not reveal personal information regarding its clients. 88NC cannot however protect privacy through the Internic registration database as this information is open to the public.<br><br>
						
						<b>VIII. Termination</b><br><br>						
						1. This Agreement may be terminated by either party, without cause, by giving the other party 30 days written notice. Written notice may be by postal or fax transmission. 88NC reserves the right to verify all cancellations before terminating service. Notwithstanding the above, 88NC may terminate service under this Agreement at any time, without penalty, if the Client fails to comply with the terms of this Agreement.<br><br>
						2. At any time 88NC believe that the service is being utilized by client causes any kind of network or server problem or disturbance, 88NC may immediately terminate service without liability and without refund.<br><br>
						3. All data not limiting to web and email will be deleted immediately if the termination is due to breach of contract, otherwise to be deleted 40 days after the date of service expiry.<br><br>
						
						<b>IX. Limited Liability</b><br><br>						
						1. Client expressly agrees that use of 88NC's Server is at Client's sole risk. Neither 88NC, its employees, affiliates, agents, third party information providers, merchants licensers or the like, warrant that 88NC's Server service will not be interrupted or error free; nor do they make any warranty as to the results that may be obtained from the use of the Server service or as to the accuracy, reliability or content of any information service or merchandise contained in or provided through the 88NC Server service, unless otherwise expressly stated in this Agreement.<br><br>
						2. Under no circumstances, including negligence, shall 88NC, its offices, agents or any one else involved in creating, producing or distributing 88NC's Server service be liable for any direct, indirect, incidental, special or consequential damages that result from the use of or inability to use the 88NC Server service; or that results from mistakes, omissions, interruptions, deletion of files, errors, defects, delays in operation, or transmission or any failure of performance, whether or not limited to acts of God, communication failure, theft, destruction or unauthorized access to 88NC's records, programs or services. Client hereby acknowledges that this paragraph shall apply to all content on 88NC's Server service.<br><br>
						3. Notwithstanding the above, Client's exclusive remedies for all damages, losses and causes of actions whether in contract, tort including negligence or otherwise, shall not exceed the aggregate dollar amount which Client paid during the term of this Agreement and any reasonable attorney's fee and court costs.<br><br>
						
						<b>X. Lawful Purpose</b><br><br>				
						Client may only use 88NC's Server for lawful purpose. Transmission of any material in violation of any Federal, State or Local regulation is prohibited. This includes, but is not limited to copyrighted materials, material judged to be obscene, threatening, pornographic, political, abusive, libelous, or encourages conduct that would constitute a criminal offense, give rise to civil liability or material protected by trade secrets.<br><br>
						
						<b>XI. Indemnification</b><br><br>						
						Client agrees that it shall defend, indemnify, save and hold 88NC harmless from any and all demands, liabilities, losses, costs and claims, including reasonable attorneys' fees, ("Liabilities") asserted against 88NC, its agents, its customers, servants, officers and employees, that may arise or result from any service provided or performed or agreed to be performed or any product sold by Client, its agents, employees or assigns. Client agrees to defend, indemnify and hold harmless 88NC against Liabilities arising out of<br>
						i) any injury to person or property caused by any products sold or otherwise distributed in connection with 88NC's Server;<br>   
						ii) any material supplied by Client infringing or allegedly infringing on the proprietary rights of a third party;<br>
						iii) copyright infringement and<br>
						iv) any defective product which Client sold on 88NC Server.<br><br>
						
						<b>XII. Contract Revisions</b><br><br>						
						Revisions to this Contract will be applicable to previous Contracts. Revisions will be considered agreed to by the Client on renewal of 88NC services as specified in Section I.<br><br>
						
						<b>XIII. Value Added Reselling</b><br><br>						
						Clients approved and authorized as 88NC's resellers are allowed to resell the storage and transfer services provided by 88NC as provided for in its standard product offering. Client agrees to handle and is responsible for all third-party client's content, support, set-up, maintenance and billing. Client agrees to having the necessary additional knowledge and skill level required. Client also agrees that they are responsible for all payments for accounts brought on by client under the reseller program.<br><br>
						
						This Agreement constitutes the entire understanding of the parties. Any changes or modifications to this Contract thereto are agreed to by the both parties upon renewal of services.
						</div><br>
                        <input type="checkbox" name="agree" value="y">
                        I have read and agreed with the Terms of Service.
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="genmed" colspan="3">
                          <input class="genbutton" type="submit" value="SAVE">
                          <input class="genbutton" type="reset" value="RESET">
                        </td>
                      </tr>
                    </table>
                    </form>
            	  </td>
            	</tr>
              </table>	  
		    </td>
          </tr>
        </table>
<?php
include($root_path . 'footer.html');
?>        