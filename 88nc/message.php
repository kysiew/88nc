<?php
$root_path = './';
include($root_path . 'header.php');
?>
        <table width="100%" border="0" bordercolor="#afaeae" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="200" height="170" align="left" valign="top" bgcolor="#ffffff">
              <img src="images/question.gif">
            </td>
            <td width="3" align="left" valign="top" background="images/dot.gif"></td>
            <td width="597" align="center" valign="top" bgcolor="#ffffff">
              <table width="98%" cellpadding="5">
                <tr>
                  <td colspan="2">
            		<div class="gen"><font color="#51bb56">MESSAGE</font></div>
            		<hr>
            	  </td>
            	</tr>
                <tr>
                  <td class="genmed" align="center">
                    <table width="80%" cellspacing="0" cellpadding="5" border="1" bordercolor="#7c7e82">
                      <tr>
                        <td class="genmed" align="center" bgcolor="#e6e7e9">
				          <?php
				          if ($_GET['mod'] == 1)
				          {
					          echo "Thank you for subscribing the service, we will get back to you soon!";
				          } 
				          else if($_GET['mod'] == 2)
				          {
					          echo "There is some problem with the database, please try again later!";
				          }
				          else if($_GET['mod'] == 3)
				          {
					          echo "Invalid email!";
				          }
				          else
				          {
					          echo "The online ordering system is under construction.<br>If you wanted to order or know more about about products, kindly contact our <a href=\"mailto:sales@88nc.net\"><font color=\"blue\">sales team</font></a>.<br>Thank you.";
				          }
				          ?>
                        	
                   		</td>
                      </tr>
                    </table>
                    <br>
                    <!--<form>
                    <input type="button" class="genbutton" value="BACK" onclick="history.back()">
                    </form>-->
				  </td>
				</tr>  
              </table>	  
		    </td>
          </tr>
        </table>
<?php
include($root_path . 'footer.html');
?>        