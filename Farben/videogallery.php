<HTML>
<HEAD><TITLE>Farben</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<META http-equiv="Pragma" content="no-cache">
<META http-equiv="imagetoolbar" content="no">
<style>

body { 
	font-family: Verdana, Geneva, Arial; 
}
a:link,a:active,a:visited{
	color:#FFFFFF;
	text-decoration: none;
}

a:hover{
	color:#8d8d92;
	text-decoration:none;
}

.bigGreen{
	font-family: 'Trebuchet MS', Tahoma, Verdana, Geneva, Arial; 
	color:#75b86e;
	font-size:17px;
	font-weight:bold;
}

.bigWhite{
	font-family: 'Trebuchet MS', Tahoma, Verdana, Geneva, Arial; 
	color:#FFFFFF;
	font-size:17px;
	font-weight:bold;
}

.normalWhite{
	color:#FFFFFF;
	font-size:10px;
}

select{
	background-color:#ece9f6;
	border:1px solid #589ed5;
	color:#424848;
	font-size:12px;
}
</style>
</HEAD>
<BODY bgcolor="#33463d" topMargin="0">

<table width="75%" align="center" valign="top">
  	<tr>
  		<td width="25%" valign="top">
  			<table width="200" align="center" valign="top" bgcolor="#486958" border="0" cellspacing="0" cellpadding="10">
  				<tr>
  					<td class="bigGreen">
  						<img src="images/farben_logo.jpg"><br/>
  						Video Gallery
  					</td>
  				</tr>
  				<tr>
  					<td class="normalWhite" bgcolor="75b86e">
<?php
	$baseDir = "videos/";
	$selectedCategory = $_GET['category'];
	$open = opendir($baseDir); 
	while ($read = readdir($open)) 
	{ 
		if ($read!= "." && $read!= ".." && is_dir($baseDir.$read)) 
		{ 
			echo '<a href="videogallery.php?category=' . $read . '">' . $read . '</a><br/><br/>'; 
			if ($selectedCategory == "")
			{
				$selectedCategory = $read;
			}
		} 
	} 
	closedir($open); 
?>  					
  					</td>
  				</tr>
  			</table>
  		</td>
  		<td width="75%" class="bigWhite">
  			<br/><br/>
  			<?php echo $selectedCategory; ?> 
  			<select name="vd" onchange="reloadPage();">

<?php
	$open = opendir($baseDir . $selectedCategory);
	$selectedVideo = $_GET['vd'];
	while ($read = readdir($open)) 
	{ 
		if (is_file($baseDir.$selectedCategory.'/'.$read)) 
		{ 
			$selected="";
			if ($selectedVideo == "")
			{
				$selectedVideo = $read;
			}
			if($selectedVideo == $read)
			{
				$selected="selected";
			}
			
			echo '<option value="'.$read.'" ' . $selected . '>' . $read . '</option>'; 
		} 
	} 
	closedir($open); 
?>  			
  			</select>
			<br/><br/>
			<object ID="MediaPlayer" classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" width="480" height="400" border="3" codebase="http://www.microsoft.com/Windows/MediaPlayer/" STANDBY="Loading Windows Media Player components..." TYPE="application/x-oleobject">
			<param name="Filename" value="<?php echo $baseDir.$selectedCategory.'/'.$selectedVideo; ?>">
			<param name="AutoStart" value="true">
			<param name="ShowControls" value="true">
			<param name="BufferingTime" value="2">
			<param name="ShowStatusBar" value="true">
			<param name="AutoSize" value="true">
			<param name="InvokeURLs" value="false">
			<embed src="<?php echo $baseDir.$selectedCategory.'/'.$selectedVideo; ?>" type="application/x-mplayer2" autostart="1" enabled="1" showstatusbar="0" showdisplay="0" showcontrols="0" AutoSize ="1" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" CODEBASE="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,0,0,0" width="240" height="240"></embed>
			</object>
  		</td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td class="normalWhite">Copyright &copy; 2010 BGRW. All rights reserved. </td>
  	</tr>
</table>

<script language="Javascript" type="text/javascript">
	function reloadPage(){
		var vd = document.getElementById('vd').value
		window.location.href="videogallery.php?category=<?php echo $selectedCategory; ?>&vd="+vd;
	}
</script>

</BODY>
</HTML>