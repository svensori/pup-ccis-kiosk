<?php
	session_start();
	$con = mysql_connect("localhost","root","");
	
	mysql_select_db("obbs", $con);
	$postid = $_GET['pid'];
	if(isset($postid)){
		$userid = $_SESSION['id'];
		$comment = $_POST['comment'];
		$pid = mysql_real_escape_string($_GET[pid]);
		$query = mysql_query("INSERT INTO `comment`(`postid`, `commentuserid`,`text`) VALUES ('$postid','$userid','$comment')");
		
        echo '<script language="javascript">';
        echo 'alert("Comment Successful!")';
        echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=maininterface.php">';
        exit();
	}
	
	
?>