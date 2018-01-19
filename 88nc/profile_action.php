<?php

$root_path = './';
include($root_path . 'include/db.php');

$id = filterSpecialCharacters($_POST['id']);
$email = filterSpecialCharacters($_POST['email']);
$password = filterSpecialCharacters($_POST['password']);
$password2 = filterSpecialCharacters($_POST['password2']);
$question_id = filterSpecialCharacters($_POST['question_id']);
$answer = filterSpecialCharacters($_POST['answer']);
$account_id = filterSpecialCharacters($_POST['account_id']);
$name = filterSpecialCharacters($_POST['name']);
$nric = filterSpecialCharacters($_POST['nric']);
$sex = filterSpecialCharacters($_POST['sex']);
$birth_day = filterSpecialCharacters($_POST['birth_day']);
$birth_month = filterSpecialCharacters($_POST['birth_month']);
$birth_year = filterSpecialCharacters($_POST['birth_year']);
$company = filterSpecialCharacters($_POST['company']);
$roc = filterSpecialCharacters($_POST['roc']);
$tel = filterSpecialCharacters($_POST['tel']);
$fax = filterSpecialCharacters($_POST['fax']);
$address = filterSpecialCharacters($_POST['address']);

if (preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*?[a-z]+$/is', $email) && $password == $password2) {
	$pwname = "";
	$pwvalue = "";
	if ($password != "") {
		$pwname = ", password";
		$pwvalue = ", '".$password."'";
	}
	if ($id == "") {
		$sql = "INSERT INTO users (email, question_id, answer, account_id, name, nric, sex, birth_day, birth_month, birth_year, company, roc, fax, tel, address".$pwname.") VALUES ('".$email."', ".$question_id.", '".$answer."', ".$account_id.", '".$name."', '".$nric."', '".$sex."', ".$birth_day.", ".$birth_month.", ".$birth_year.", '".$company."', '".$roc."', '".$fax."', '".$tel."', '".$address."'".$pwvalue.")";
	} else {
		$sql = "UPDATE users SET email='".$email."',question_id=".$question_id.", answer='".$answer."', account_id=".$account_id.", name='".$name."', nric='".$nric."', sex='".$sex."', birth_day=".$birth_day.", birth_month=".$birth_month.", birth_year=".$birth_year.", company='".$company."', roc='".$roc."', fax='".$fax."', tel='".$tel."', address='".$address."'";
		if ($password != "") {
			$sql = $sql . ", password='".$password."'",
		}
	}
	if (!$db->sql_query($sql))
	{
		header('Location: ' . $root_path . 'message.php?mod=2');
	} else{
		if ($id == "") {
			//send the notification email here
			header('Location: ' . $root_path . 'message.php?mod=1');
		} else {
			header('Location: ' . $root_path . 'message.php?mod=1');
		}
	}
} else {
	header('Location: ' . $root_path . 'message.php?mod=3');
}
?>
