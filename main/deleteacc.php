<?php

	session_start();
	$connect = mysql_connect("localhost","root","") or die ("could not connect");
	mysql_select_db("obbs") or die("cannot find db");
    
	$userid = $_SESSION['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($_SESSION['email'] == $email && $_SESSION['password'] == $password){
		$query = mysql_query("DELETE FROM `accounts` WHERE `id` = '$userid'");
		mysql_close($connect);
		session_destroy();
		echo '<script language="javascript">';
		echo 'alert("Account Deleted")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=index.html">';	
	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Error in account deletion!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=main/maininterface.php">';
	}
	
?>