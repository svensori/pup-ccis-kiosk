<?php
	
	$con = mysql_connect("localhost","root","");
	
	mysql_select_db("obbs", $con);
		
		echo $con;
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = $_POST['lname'];
		$age = $_POST['age'];
		$month = $_POST['month'];
		$date = $_POST['date'];
		$year = $_POST['year'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $pword = $_POST['pword'];
        $pwordchk = $_POST['pword2'];
        $contact = $_POST['contact'];
	
	//check if email available
	
	$qry = mysql_query("SELECT * FROM accounts WHERE email = '$email'");
	
	$numrows = mysql_num_rows($qry);
	
	if($numrows == 0){
        
                //verify fields
                if($fname == "" || 
					$lname == "" || 
					$age == "" || 
					$month == "" || 
					$date == "" || 
					$year == "" || 
					$gender == "" || 
					$email == "" || 
					$pword == "" || 
					$pwordchk  == "" || 
					$contact == ""){
                        echo '<script language="javascript">';
                        echo "alert(\"Please fill all the required fields!\")";
                        echo '</script>';
		
                        echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../index.html">';
                        exit();

                }
                else{
                         //verify password
                        if($pword == $pwordchk){
                
                        $add="INSERT INTO `accounts`(`fname`, `lname`, `age`, `month`, `date`, `year`, `gender`, `email`, `password`, `contact`) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[month]', '$_POST[date]', '$_POST[year]', '$_POST[gender]', '$_POST[email]', '$_POST[pword]', '$_POST[contact]')";
	
                        //$_SESSION['uname'] = mysql_real_escape_string($_POST['uname']);
		
                        $VAR = mysql_query($add,$con);
						echo ($VAR);
                        mysql_close($con);
		
                        echo '<script language="javascript">';
                        echo 'alert("Registration Successful!")';
                        echo '</script>';
		
                        echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=index.html">';
                        exit();
                
                        }
                
                        else{
                        echo '<script language="javascript">';
                        echo "alert(\"Password didn't match!\")";
                        echo '</script>';
		
                        echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=index.html">';
                        exit();

                        }//..verify pass
                
                }
               
		
		
	}
	else{
		
		echo '<script language="javascript">';
		echo 'alert("Username already taken!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.3; URL=../index.html">';
		exit();	
	}
	
	
?>