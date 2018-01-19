<?php

$root_path = './';
include($root_path . 'session.php');
include($root_path . 'include/db.php');

$id = filterSpecialCharacters($_POST['id']);
$deleteFlag = $_POST['deleteFlag'];
$status = $_POST['status'];
$remark = filterSpecialCharacters($_POST['remark']);

if ($deleteFlag == "0") 
{
	$sql = "UPDATE freewebsite set status='".$status."', remark='".$remark."' WHERE id=" . $id;
}
else
{
	$sql = "DELETE FROM freewebsite WHERE id=" . $id;
}

if (!$db->sql_query($sql))
{
	header('Location: ' . $root_path . 'message.php?mod=2');
}

header('Location: ' . $root_path . 'admin_freeWebsiteList.php');
?>