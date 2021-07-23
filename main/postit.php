<?php

	session_start();
	mysql_connect("localhost","root","") or die ("could not connect");
	mysql_select_db("obbs") or die("cannot find db");
    
	$userid = $_SESSION['id'];
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$name = $fname." ".$lname;
	$title = $_POST['title'];
	$content = nl2br($_POST['desc']);
	$strmonth = $_POST['strmonth'];
	$strdate = $_POST['strdate'];
	$stryear = $_POST['stryear'];
	$expmonth = $_POST['expmonth'];
	$expdate = $_POST['expdate'];
	$expyear = $_POST['expyear'];
	$start = $stryear.'-'.$strmonth.'-'.$strdate;
	$expire = $expyear.'-'.$expmonth.'-'.$expdate;
	$query = mysql_query("INSERT INTO `mailbox`(`userid`, `timeposted`, `name`,`title`, `content`, `start`, `expiry`) VALUES ('$userid', now(),'$name', '$title', '$content', '$start', '$expire')");
	//$rows = mysql_num_rows($query);
	
	if($query){
		echo '<script language="javascript">';
		echo 'alert("Message successfully sent!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=maininterface.php">';
	}
	else {
		echo '<script language="javascript">';
		echo 'alert(error_log)';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=maininterface.php">';
	}
?>