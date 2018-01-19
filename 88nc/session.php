<?php
$root_path = './';

session_start();
  
if (!isset($_SESSION['valid_user']))
{
	header('Location: ' . $root_path . 'adminLogin.php');
	exit();
}
?>