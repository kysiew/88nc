<?php
$root_path = './';
include($root_path . 'header.php');
?>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="center" valign="top" bgcolor="#ffffff">
<?php
include($root_path . 'prod_sitebar.html');
?>              
			  <br>
              <img src="images/server.jpg">
            </td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">SECONDARY MAIL EXCHANGE SERVICE</font></div>
            		<hr>
            	  </td>
            	</tr>
                <tr valign="top">
                  <td class="genmed" width="100%">
                  	With no group drop boxes or forwarding required, the 88NC gives you true queuing MX backup for your mail server. Our backup mail service uses standard internet protocols and just works: it's the keep it simple principle. No weird scripts or special accounts required, and we're compatible with any mail server. If you've set up your own mail server and need a secondary MX for it, you've come to the right place!<br><br>
				 	We offer the following configurable anti-spam options: <br><br>
					<img src="images/new_arrow.gif"> DNSBL (with optional custom lists) <br>
					<img src="images/new_arrow.gif"> Sender Policy Framework (SPF) (optional custom action handling) <br>
					<img src="images/new_arrow.gif"> Greylisting <br>
					<img src="images/new_arrow.gif"> Highly configurable blacklist and whitelist features <br>
					<img src="images/new_arrow.gif"> Inline anti-virus filtering <br>
					<img src="images/new_arrow.gif"> Configurable valid user list <br><br>					
					Each of the filtering options can be applied to domains individually. You can filter some, all, or none of your domains with any combination of methods, including custom actions if a match is found. All mail is held in the queue for three weeks (21 days) and messages are limited to 50 MB each. We do not have account quotas.<br><br>
					<b>Why a Backup Mail Server?</b><br><br>
					There are those that argue that having a secondary MX is pointless - the originating mail server will retry on its own if the final destination can't be reached. And they're mostly correct. I say "mostly" because there are mail servers out there that won't queue a message to retry later; if you're down, you're out of luck, and the message is lost forever. Was it important to you? You'll never know, nor will you ever know that it tried to get to you.<br><br>
					The 88NC SMTP services will queue and retry for three weeks - much longer than the 5 day standard most mail servers use. If redundancey and reliability for your email past 5 days is critical, then our SMTP services are prefectly suited for your needs.<br><br>
					<b>How Secondary MX Works</b><br><br>
					In this example, the 88NC is acting as a secondary mail server for one primary mail server. You can, however, have more than one primary mail server. No matter where the message is sent to it will ultimately arrive at your primary mail server. All messages are passed on port 25.<br><br>
					<img src="images/secondarymx.gif">
            	  </td>
            	</tr>
                <tr valign="top">
                  <td class="genmed" width="100%">
					<table width="100%" border="1" bordercolor="#afaeae" cellspacing="0" cellpadding="2">
					<tr>
					  <td width="40%" class="gen" bgcolor="#67657e" align="center">FEATURES</td>
					  <td width="30%" class="gen" bgcolor="#67657e" align="center">BASIC</td>
					  <td width="30%" class="gen" bgcolor="#67657e" align="center">BASIC PLUS</td>
					</tr>    
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Secondary MX SMTP Redirection</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><img src="images/tick.gif"></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>   
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Outbound Mail Accounts</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center">-</td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>   
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Secondary DNS</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><img src="images/tick.gif"></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Recipient Maps [Note 1] (Valid User Table)</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><img src="images/tick.gif"></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Address Mapping/Forwarding</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center">-</td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">DNSBL, SPF Filters</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><img src="images/tick.gif"></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">SPF Custom Actions</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center">-</td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Greylisting Filter</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center">-</td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>  
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25">Blacklist/Whitelist [Note 2]</td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><img src="images/tick.gif"></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><img src="images/tick.gif"></td>
				  	</tr>
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff" height="25"><b>Price</b></td>
				  	  <td class="genmed" bgcolor="#eeeded" align="center"><b><font color="#2b6999">RM50</font></b></td>
				  	  <td class="genmed" bgcolor="#dcd9d9" align="center"><b><font color="#2b6999">RM200</font></b></td>
				  	</tr>
				  	<tr>
				  	  <td class="genmed" bgcolor="#ffffff">&nbsp;</td>
				  	  <td class="genmed" bgcolor="#ffffff" align="center"><input class="genbutton" type="button" value="ORDER NOW" onclick="window.location='message.php';"></td>
				  	  <td class="genmed" bgcolor="#ffffff" align="center"><input class="genbutton" type="button" value="ORDER NOW" onclick="window.location='message.php';"></td>
				  	</tr> 
					</table><br>
					<b>Notes:</b><br>
					<table width="100%" border="0" cellspacing="0" cellpadding="2">
					  <tr>
				  	    <td class="genmed" bgcolor="#ffffff" valign="top">1.</td>
				  	    <td class="genmed" bgcolor="#ffffff">Basic package is limited to 20 recipient maps entries per domain; these are similar to a "local user table" or and "allowed addresses" list designed to limit backscatter and thwart directory harvest attacks. All Basic Plus packages include an unlimited number of recipient map entries.</td>
				  	  </tr> 
					  <tr>
				  	    <td class="genmed" bgcolor="#ffffff" valign="top">2.</td>
				  	    <td class="genmed" bgcolor="#ffffff">Basic package is limited to IP address only entries. All Basic Plus packages include filter by domain name, network range, and sender email address.</td>
				  	  </tr> 
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