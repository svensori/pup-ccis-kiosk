<?php
	session_start();
	$con = mysql_connect("localhost","root","");
	
	mysql_select_db("obbs", $con);
		
		
		$userid = $_SESSION['id'];
        $comment = $_GET['jcomment'];
		$pid = $_GET['jpid'];
		
		if(isset($comment) && isset($pid)){
			$query = mysql_query("INSERT INTO `comment`(`postid`, `commentuserid`,`text`) VALUES ('$pid','$userid','$comment')");
			echo '<script language="javascript">';
            //echo 'alert("Comment Successful!")';
            echo '</script>';
			echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=maininterface.php">';
                     
            exit();
		}
		else{
			echo '<script language="javascript">';
            echo 'alert("Please try again!")';
            echo '</script>';
			echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=maininterface.php">';
		}
	
		
                      
	
	
	
?>