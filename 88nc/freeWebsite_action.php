<?php
Header("content-type: application/x-javascript");
$root_path = './';
include($root_path . 'include/db.php');

$companyName = filterSpecialCharacters($_POST['companyName']);
$companyRegNo = filterSpecialCharacters($_POST['companyRegNo']);
$personInCharge = filterSpecialCharacters($_POST['personInCharge']);
$position = filterSpecialCharacters($_POST['position']);
$phone = filterSpecialCharacters($_POST['phone']);
$fax = filterSpecialCharacters($_POST['fax']);
$email = filterSpecialCharacters($_POST['email']);
$contactvia = filterSpecialCharacters($_POST['contactvia']);
$specialization = filterSpecialCharacters($_POST['specialization']);
$serverIP=$_SERVER['REMOTE_ADDR'];

if (preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*?[a-z]+$/is', $email)) {
	$sql = "INSERT INTO freewebsite (companyName, companyRegNo, personInCharge, position, phone, fax, email, contactvia, specialization, ipaddress) VALUES ('".$companyName."', '".$companyRegNo."', '".$personInCharge."', '".$position."', '".$phone."', '".$fax."', '".$email."', '".$contactvia."', '".$specialization."', '".$serverIP."')";
	if (!$db->sql_query($sql))
	{
		header('Location: ' . $root_path . 'message.php?mod=2');
	}
	header('Location: ' . $root_path . 'message.php?mod=1');
} else {
	header('Location: ' . $root_path . 'message.php?mod=3');
}
?>