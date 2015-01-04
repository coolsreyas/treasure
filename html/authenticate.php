<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header("Location: register.php");
				exit;
}
?>