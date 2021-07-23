<?php
	session_start();
	$connect = mysql_connect("localhost","root","") or die ("could not connect");
	mysql_select_db("obbs") or die("cannot find db");
    
	$userid = $_SESSION['id'];
	$reqno = $_POST['reqno'];
	
	$query = mysql_query("SELECT * FROM `mailbox` WHERE 1");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0){
		$query = mysql_query("DELETE FROM `mailbox` WHERE `id` = '$reqno'");
		mysql_close($connect);
		echo '<script language="javascript">';
		echo 'alert("Successfully Deleted")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=admin.php">';	
	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Error in mail deletion!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=admin.php">';
	}

?>