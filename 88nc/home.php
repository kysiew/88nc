<?php
$root_path = './';
include($root_path . 'header.html');
include($root_path . 'include/db.php');
?>
<html>
<head>
	<title>2009马来西亚购物嘉年华</title>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<link rel="stylesheet" href="scripts/ms.css" type="text/css"/>
	<script type="text/javascript" src="scripts/LibCrossBrowser.js"></script>
	<script type="text/javascript" src="scripts/EventHandler.js"></script>
	<script type="text/javascript" src="scripts/Bs_FormUtil.lib.js"></script>
	<script type="text/javascript" src="scripts/Bs_Slider.class.js"></script>
	<script type="text/javascript" src="scripts/Bs_ScrollableDiv.class.js"></script>

<script type="text/javascript">
	function init(){	
		var scroller = new Bs_ScrollableDiv();		
		scroller.init('divContainer_1', 'divContent_1');		
		var sliderObj = new Bs_Slider();		
		sliderObj.width          = 'auto';		
		sliderObj.height         = 'auto';		
		sliderObj.arrowMouseOver = true;		
		sliderObj.valueDefault   = 0;		
		sliderObj.direction      = 1;		
		sliderObj.imgDir         = 'images/scroll/';		
		sliderObj.setBackgroundImage('back.gif', 'repeat-y');		
		sliderObj.setSliderIcon('front.gif', 11, 5);		
		sliderObj.setArrowIconLeft('up.gif', 11, 10);		
		sliderObj.setArrowIconRight('down.gif', 11, 10);		
		sliderObj.useInputField = 1;		
		scroller.setSliderObject(sliderObj, 'sliderDiv1');				
		scroller.setSlideSpeed(200, 'pixel');			
		scroller.setWheelSpeed(50, 'pixel');
	}

</script>
</head>
<body background="images/bg3.jpg" bottomMargin="0" leftMargin="0" topMargin="0" rightMargin="0" marginwidth="0" marginheight="0" onLoad="init();">
	<table width="900" height="545" border="0" cellspacing="0" cellpadding="0" align="center" background="images/contentsmall.jpg">
	    <tr height="145">
	      <td colspan="2">&nbsp;</td>
		</tr>
	    <tr height="10">
	      <td align="center" valign="top" colspan="2">
	      	<div class="genGold">2009马来西亚购物嘉年华</div>
	      </td>
		</tr>
	    <tr height="30">
	      <td align="right" valign="top" width="600">
	      	<div class="genmedBlack">您让自己放纵抢购的好理由</div>
	      </td>
	      <td align="center" valign="top" width="300">&nbsp;</td>
		</tr>
	    <tr height="200">
	      <td colspan="2">
	      	<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	      	  <tr>
	      	  	<td width="250">&nbsp;</td>
	      	  	<td align="left" valign="top" width="230">
	      	  		<a href="whattobuy.php"><img src="images/index_buy.gif" border="0" alt="逛哪？买啥？"></a>
	      	  		<a href="dutyfree.php"><img src="images/index_dutyfree.gif" border="0" alt="免税特区！惊人优惠"></a><br>
	      	  		<a href="shopping.php"><img src="images/index_video.gif" border="0" alt="购物日日新-视频"></a>
	      	  		<a href="travel.php"><img src="images/index_travel.gif" border="0" alt="旅游配套"></a>
	      	  	</td>
	      	  	<td width="5">&nbsp;</td>
	      	  	<td align="left" valign="top">
	      	  	  <div class="gensmallGold">惊人优惠、疯狂抢购、机会难逢、别再等了</div>
<script type="text/javascript">

/******************************************
* Scrollable content script II- � Dynamic Drive (www.dynamicdrive.com)
* Visit http://www.dynamicdrive.com/ for full source code
* This notice must stay intact for use
******************************************/

iens6=document.all||document.getElementById
ns4=document.layers

//specify speed of scroll (greater=faster)
var speed=3

if (iens6){
document.write('<div id="container" style="position:relative;width:200px;height:220px;border:1px solid #FFFFFF;overflow:hidden">')
document.write('<div id="content" style="position:absolute;width:200px;left:0;top:0">')
}
</script>

<ilayer name="nscontainer" width=250 height=200 clip="0,0,175,160">
<layer name="nscontent" width=250 height=200 visibility=hidden>

<!--INSERT CONTENT HERE-->
<p class="contentBlack"><br>
<?php
$sql = "SELECT content FROM introduction WHERE group_idx = 'INDEX'";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result))
{
	echo $row['content'];
}
$db->sql_freeresult($result);
?>	      
</p>
<!--END CONTENT-->

</layer>
</ilayer>

<script language="JavaScript1.2">
if (iens6)
document.write('</div></div>')
</script>

<table width="200px"><td><p align="right">
<a href="#" onMouseover="moveup()" onMouseout="clearTimeout(moveupvar)"><img src="images/up.gif" border=0></a>  <a href="#" onMouseover="movedown()" onMouseout="clearTimeout(movedownvar)"><img src="images/down.gif" border=0></a></p></td>
</table>

<script language="JavaScript1.2">
if (iens6){
var crossobj=document.getElementById? document.getElementById("content") : document.all.content
var contentheight=crossobj.offsetHeight
}
else if (ns4){
var crossobj=document.nscontainer.document.nscontent
var contentheight=crossobj.clip.height
}

function movedown(){
if (iens6&&parseInt(crossobj.style.top)>=(contentheight*(-1)+100))
crossobj.style.top=parseInt(crossobj.style.top)-speed+"px"
else if (ns4&&crossobj.top>=(contentheight*(-1)+100))
crossobj.top-=speed
movedownvar=setTimeout("movedown()",20)
}

function moveup(){
if (iens6&&parseInt(crossobj.style.top)<=0)
crossobj.style.top=parseInt(crossobj.style.top)+speed+"px"
else if (ns4&&crossobj.top<=0)
crossobj.top+=speed
moveupvar=setTimeout("moveup()",20)

}

function getcontent_height(){
if (iens6)
contentheight=crossobj.offsetHeight
else if (ns4)
document.nscontainer.document.nscontent.visibility="show"
}
window.onload=getcontent_height
</script>
	      	  	</td>
	      	  	<td width="196">
	      	  	  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	    			<tr height="215">
	      	  	  	  <td colspan="2">&nbsp;</td>
	      	  	  	</tr>
	      	  	  	<tr>
	      	  	  	  <td width="10">&nbsp;</td>
			      	  <td align="left" valign="top">
			      	    <a href="contactus.php"><img src="images/contactus.gif" border="0"></a>
			      	  </td>
	      	  	  	</tr>
	      	  	  </table>
	      	  	</td>
	      	  </tr>
	      	  <tr>
	      	  	<td>&nbsp;</td>
	      	  	<td>&nbsp;</td>
	      	  	<td>&nbsp;</td>
	      	  	<td align="right"><a href="sharethispage.php"><div class="xsmallBlack"><img src="images/email.gif" border="0"><font color="#000000">E-mail this to a friend</font></div></a><br></td>
	      	  	<td>&nbsp;</td>
	      	  </tr>
	      	</table>
	      </td>
		</tr>
	</table>
	<table background="images/bottom.jpg" width="522" height="84" border="0" cellspacing="0" cellpadding="0" align="center">
  	  <tr>
  	  	<td class="copyright">&nbsp;Copyright &copy; 2009MalaysiaMegaSaleCarnival.com 版权所有。 (<i>Best View with 1280 x 720</i>)</td>
  	  </tr>
  	  <tr>
  	  	<td ><a href="http://www.tourism.gov.my" target="_blank"><img src="images/tourismmy1.gif" border="0"></a></td>
  	  </tr>
	</table>
</body>
</head>
</html>