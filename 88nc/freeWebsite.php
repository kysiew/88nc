<?php
$root_path = './';
include($root_path . 'header.php');
?>
<script language="Javascript" type="text/javascript">
	function checkForm(myForm){
		var re = /^\s{1,}$/g;
		var companyName = myForm.companyName.value;
		companyName = companyName.replace(re, "");
		if (companyName == "") {
			alert("Company Name is compulsory.");
			return false;
		}
		var companyRegNo = myForm.companyRegNo.value;
		companyRegNo = companyRegNo.replace(re, "");
		if (companyRegNo == "") {
			alert("Company Registration No. is compulsory.");
			return false;
		}
		var personInCharge = myForm.personInCharge.value;
		personInCharge = personInCharge.replace(re, "");
		if (personInCharge == "") {
			alert("Person In Charge is compulsory.");
			return false;
		}
		var email = myForm.email.value;
		email = email.replace(re, "");
		if (email == "") {
			alert("Email is compulsory.");
			return false;
		}
		var radio_choice = false;
		for (counter = 0; counter < myForm.contactvia.length; counter++) {
			if (myForm.contactvia[counter].checked)
			radio_choice = true; 

		}
		if (!radio_choice) {
			alert("Preferable contact via is compulsory.");
			return false;
		}
		if (myForm.specialization.selectedIndex == 0) {
			alert("Specialization is compulsory.");
			return false;
		}
		if (myForm.agree.checked == false) {
			alert("You must accept the conditions of use in order to sign-up for this service.");
			return false;
		}
		return true;
	}
</script>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="left" valign="top" bgcolor="#ffffff"><img src="images/webdesign1.gif"><br><br><img src="images/webdesign2.gif"></td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">REGISTRATION FOR FREE COMPANY WEBSITE</font></div>
            		<hr>
            	  </td>
            	</tr>
                <tr>
                  <td colspan="2">
                    <form action="freeWebsite_action.php" method="post" name="myForm" onsubmit="return checkForm(this)">
                    <table>
                      <tr>
                        <td align="left" class="genmed" colspan="3"><font color="#4695cc">
                        88NC is currently running a promotion, we are give free webpage design and hosting package (up to 10MB) for 100 Malaysia companies with first come first serve basis.<br><br>
						Our free webpage design included:<br><ul>
						<li>1 landing page
						<li>4 static pages (choose any 4 from the list below)</li><br>
						  i)   company profile<br>
						  ii)  products <br>
						  iii) services<br>
						  iV)  contact information<br>
						  v)   customer testimonial or success stories
						<li>web counter and statistics</li>
						</ul>
						To sign up the service, just fill up and submit the registration form below.<br></font>
						<font color="red"><b>Absolutely free! No hidden cost!</b><br><br>
                        </font></td>
                      </tr>
                      <tr>
                        <td align="left" class="xsmalli" colspan="3"><font color="red">*</font> Denotes compulsory fields</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Company Name <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="companyName" size="35" maxlength="150"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Company Registration No. <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="companyRegNo" size="35" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Person In Charge <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="personInCharge" size="35" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Position</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="position" size="35" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Phone</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="phone" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Fax</td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="fax" size="35" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Email <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left"><input type="text" name="email" size="35" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Preferable contact via <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left" class="genmed">
                          <input type="radio" name="contactvia" value="phone">Phone
                          <input type="radio" name="contactvia" value="fax">Fax
                          <input type="radio" name="contactvia" value="email">Email
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed">Specialization <font color="red">*</font></td>
                        <td align="center">:</td>
                        <td align="left">
                          <select name="specialization">
                            <option value="">Please Select</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Actuarial/Stats">Actuarial/Stats</option>
                            <option value="Advertising">Advertising</option>
                            <option value="Agriculture Design">Agriculture Design</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Aviation">Aviation</option>
                            <option value="Banking/Invest">Banking/Invest</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Chemical Eng">Chemical Eng</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Civil/Construct">Civil/Construct</option>
                            <option value="Clerical/Admin">Clerical/Admin</option>
                            <option value="Creative/Graphics">Creative/Graphics</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Education">Education</option>
                            <option value="Electrical Eng">Electrical Eng</option>
                            <option value="Electronics Eng">Electronics Eng</option>
                            <option value="Food Tech">Food Tech</option>
                            <option value="Freight/Shipping">Freight/Shipping</option>
                            <option value="General Workers">General Workers</option>
                            <option value="Geology">Geology</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Hotel/Food">Hotel/Food</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="IT/Computer">IT/Computer</option>
                            <option value="Journalist/Editor">Journalist/Editor</option>
                            <option value="Legal">Legal</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Mechanical Eng">Mechanical Eng</option>
                            <option value="Media/Entertain">Media/Entertain</option>
                            <option value="Misc. Eng">Misc. Eng</option>
                            <option value="Others">Others</option>
                            <option value="Personal Care">Personal Care</option>
                            <option value="Process Ctr">Process Ctr</option>
                            <option value="Protective Services">Protective Services</option>
                            <option value="Publishing">Publishing</option>
                            <option value="Purchasing">Purchasing</option>
                            <option value="QC/QA/Inspection">QC/QA/Inspection</option>
                            <option value="Quantity Survey">Quantity Survey</option>
                            <option value="Sales">Sales</option>
                            <option value="Science/Tech">Science/Tech</option>
                            <option value="Secretarial">Secretarial</option>
                            <option value="Social Services">Social Services</option>
                            <option value="Training">Training</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">
                          Conditions of use<br>
                          <textarea name="term" cols="60" rows="10">
Definitions 
88nc.net is a trading title of Eighty Eight Network & Communications, hereinafter referred to as the provider. 

Organisations or Individuals hereinafter referred to as the User, may use the services provided by the provider subject to the following conditions: 

Conditions & Restrictions 
1) The User is the registered administrative authority for the service(s) requested, as defined and enforced by the relevant registrar.   
2) The User holds the provider free and safe from any liability howsoever incurred by their use of this service. 
3) The User indemnifies the provider against any direct or indirect liability for claims made against the services for which the provider is providing a service. 
4) The User agrees that the provider will accept no consequential or other losses as a result of the service being suspended or corrupted for reasons beyond the provider's control. 
5) The User understands that they accept full responsibility for any violations against any applicable laws, local or otherwise. 
6) The provider reserves the right to remove any User from the service by giving 30 days notice by email for whatever reason it deems fit to do so. Abuse*** of services could result in immediate termination of service. 
7) A valid email address must be maintained throughout the usage of the service by the User. The provider reserves the right to terminate use without notice if it is not able to communicate with a valid email address. The User must inform the provider of any change of their email address. 
8) The provider or any of its respective providers, agents or licensors, makes no warranty, either expressed or implied, including but not limited to warranties of merchantability, fitness for a particular purpose. 

Abuse and Acceptable use 
We reserve the right to terminate our service for any of our customers, providing a 30-day notice of termination by email to the customer. In the event of abuse*** of our service we reserve the right to terminate the service immediately. Any refunds of monies will be given at the sole discression of ourselves(the provider). 

*We place no guarentee that our servers will always be contactable from any location in the world. It is impossible that any ISP or network provider can ensure that all locations will be accessible, due to harware failure, configuration faults or natural disasters. 

**We consider abuse of our network and services to be using our services to facilitate unsolicited email (spam), violation of trademarks or copyrights, disrupts or in any way causes denial of service to ourselves or our customers, cause or promote abusive or threatening behaviour. Additionally any activity that is considered illegal or a criminal offense, including the transfer of copyrighted mp3's, videos or any other form of copyrighted material. 

Governing Laws 
This Agreement shall be construed and interpreted in accordance with the laws of the Malaysia without regard to its conflict of laws principles. 

Changes to conditions 
These conditions are subject to review and modification. We reserve the right to implement any changes to the conditions.

Last updated: 27 October, 2006 
                          </textarea><br>
                          <input type="checkbox" name="agree">I am agreed and accept the above conditions of use.
                        </td>
                      </tr>
                      <tr>
                        <td align="left" class="genmed" colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" class="genmed" colspan="3">
                          <input class="genbutton" type="submit" value="SUBMIT">
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