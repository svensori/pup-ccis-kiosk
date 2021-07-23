<?php

session_start();

$email = $_POST['email'];
$password = $_POST['pword'];

if($email && $password){
	
	$connect = mysql_connect("localhost","root","") or die("Couldn't Connect!");
	mysql_select_db("obbs") or die("Couldn't find DB!");

	$query = mysql_query("SELECT * FROM accounts WHERE email = '$email'");
	$numrows = mysql_num_rows($query);
	//log check 1st step
	if($numrows != 0){
		
		//log in data matching
		while($row = mysql_fetch_assoc($query)){
			$dbid = $row['id'];
			$dbfname = $row['fname'];
			$dblname = $row['lname'];
			$dbage = $row['age'];
			$dbmonth = $row['month'];
			$dbdate = $row['date'];
			$dbyear = $row['year'];
			$dbemail = $row['email'];
			$dbcontact = $row['contact'];
			$dbpassword = $row['password'];
			$dbadmin = $row['admin'];
			
		}
		
		//check if they match
		if($email == $dbemail && $password == $dbpassword){
			//echo "Logged in! <a href='main/maininterface.php'>Click</a> here to go to dashboard!";
			$_SESSION['id'] = $dbid;
			$_SESSION['fname'] = $dbfname;
			$_SESSION['lname'] = $dblname;
			$_SESSION['password'] = $dbpassword;
			$_SESSION['email'] = $dbemail;
			$_SESSION['contact'] = $dbcontact;
			$_SESSION['admin'] = $dbadmin;
			//echo 'HI!, '.$dbfname;
			//if($_SESSION['admin'] == 1)
			//	echo 'admin!';
			echo '<script language="javascript">';
			echo 'alert("Logged in successfully!")';
			echo '</script>';
			echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../main/maininterface.php">';
			exit(); 
		}
		else{
			
			echo '<script language="javascript">';
			echo 'alert("Incorrect Password!")';
			echo '</script>';
			echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../index.html">';
			exit();
			}
	}
		
	else{
		echo '<script language="javascript">';
		echo 'alert("User does not exist!")';
		echo '</script>';
		}
		echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../index.html">';
		exit();
	
}
else{
	echo '<script language="javascript">';
	echo 'alert("Please fill all required fields!")';
	echo '</script>';
	echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../index.html">';
	die();
}
?>