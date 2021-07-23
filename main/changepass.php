<?php

	session_start();
	$connect = mysql_connect("localhost","root","") or die ("could not connect");
	mysql_select_db("obbs") or die("cannot find db");
    
	$userid = $_SESSION['id'];
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$confnewpass = $_POST['confnewpass'];
	
	if($_SESSION['password'] == $oldpass && $newpass == $confnewpass){
		$query = mysql_query("UPDATE `accounts` SET `password`= '$newpass' WHERE `id`= '$userid'");
		$_SESSION['password'] = $newpass;
		mysql_close($connect);
		echo '<script language="javascript">';
		echo 'alert("Password successfully changed!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=main/maininterface.php">';	
	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Error changing password! Please check the passwords and try again!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=main/maininterface.php">';
	}
	
?>