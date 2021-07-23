<?php
	
      session_start();
	  
?>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="../styles/mainframe.css">
		
		<script>
		postnum;
		com;
		
		function getPostID(pid) {
			var newID = pid;
			return newID;
		}
		
		function getComment(x){
			postnum = x;
			com = document.getElementById("mycomment").value;
			window.location.href = "comment.php?jpid=" + postnum + "&jcomment=" + com;
			javascript:alert(com);
			delete postnum;
			delete com;
		}
		
		
		
		
			
		
		
		</script>
		
		
	
	</head>
	<body>
		<tt>
		<!--DATE AND TIME-->
		<div class="date">
			<h2>
			<script>
				var d = new Date();
				var date = (d.toString()).substring(4, 15);
				var time = (d.toString()).substring(16, 21)
				document.write("&nbspDATE:    " + date);
			</script>
			<br>
			<script>
				document.write("&nbspTIME:    " + time);
			</script>
			</h2>
		</div>
		<!--DATE AND TIME-->
		
		<!--WRITE A POST-->
		<a href="#openModalPost">
		<div class="navigate" style="background-color:lightblue; border:solid lightblue; opacity:0.8; color:blue; margin-left:66.6%;">
			<img src="../res/writeposticon.png" height="30" width="30" style="margin:6px" align="middle"><br>WRITE A POST
		</div>
		</a>
		<div id="openModalPost" class="modalDialog">
			<div>
				<tt>
				<p align="center">CREATE AN ANNOUNCEMENT</p>
				<a href="#close" title="Close" class="close">X</a>
				<form action="postit.php" method="post">
				TITLE:<br>
				<input type="text" name="title" maxlength="32" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<br>
				DETAILS:(max characters 280)<br>
				<textarea rows="10" cols="92" maxlength="280" wrap="physical" name="desc" style="border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></textarea>
				<br>
				<br>
				START DATE:<br>
				<select name="strmonth">
				<option value="0" selected="1">Month</option>
				<option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">May</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Aug</option>
				<option value="9">Sep</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>
				</select>
				<select name="strdate">
				<option value="0" selected="1">Date</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				<select name="stryear">
				<option value="0" selected="1">Year</option>
				<option value="2016">2016</option>
			<!--<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>-->
				</select>
				<br>
				<br>
				EXPIRY DATE:<br>
				<select name="expmonth">
				<option value="0" selected="1">Month</option>
				<option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">May</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Aug</option>
				<option value="9">Sep</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>
				</select>
				<select name="expdate">
				<option value="0" selected="1">Date</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				<select name="expyear">
				<option value="0" selected="1">Year</option>
				<option value="2016">2016</option>
		<!--	<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option> -->
				</select> 
				<br>
				<br>
				<input type="Submit" name="Submit" value="Request" style="border-radius:25px;">
				<input type="Reset" name="Reset"value="Cancel" style="border-radius:25px;">
				</form>
				</tt>
			</div>
		</div>
		<!--..WRITE A POST-->
		
		<!--LOGOUT-->
		<a href="logout.php">
			<div class="navigate" style="color:black; border: solid white; opacity:0.8; margin-left:83%;">
			<img src="../res/logouticon.png" height="30" width="30" style="margin:6px"><br>LOGOUT
			</div>
		</a>
		<!--..LOGOUT-->
		
		<!--CURRENT USER-->
		<div class="namebar" style="top:18%; left:5%;">
			<b>
			<?php 
				echo 'Hi!'.$_SESSION['fname'];
			?>
			</b>
		</div>	
		<?php
			if ($_SESSION['admin'] == 1){
				echo '<a href="#openModalAdmin">';
				echo '<div class="sidebtn" style="top:15%;">';
				echo '<img src="../res/adminbtn.png" height="100%" width="100%">';
				echo '</div>';
				echo '</a>';
			}
			else{
				echo '<div class="sidebtn" style="top:15%;">';
				echo '<img src="../res/userbtn.png" height="100%" width="100%">';
				echo '</div>';
			}
			?>
		<div id="openModalAdmin" class="modalDialog">
			<div style="width:800px">
				<tt>
				<p align="center">Admin Panel</p>
				<a href="../main/maininterface.php" title="Close" class="close">X</a>
				<iframe src="../table/admin.php" width="100%" height="50%"></iframe>
				</tt>
			</div>
		</div>
		<!--..CURRENT USER-->
		
		<!--SETTINGS-->
		<a href="#openModalSettings">
			<div class="sidebtn" style="top:23%">
				<img src="../res/settingsbtn.png" height="100%" width="100%">
			</div>
		</a>
		<div id="openModalSettings" class="modalDialog">
			<div>
				<tt>
				<p align="center">Settings</p>
				<a href="#close" title="Close" class="close">X</a>
				<form action="changepass.php" method="post">
				<strong>Change Password:</strong><br><br>
				<label>OLD PASSWORD</label>
				<input type="password" name="oldpass" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<label>NEW PASSWORD</label>
				<input type="password" name="newpass" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<label>CONFIRM NEW PASSWORD</label>
				<input type="password" name="confnewpass" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<br>
				<input type="Submit" name="Submit" value="Confirm" style="border-radius:25px;">
				<input type="Reset" name="Reset"value="Cancel" style="border-radius:25px;">
				<br>
				<br>
				</form>
				<form action="deleteacc.php" method="post">
				<strong>DELETE ACCOUNT:</strong><br><br>
				<label>E-MAIL ADDRESS:</label>
				<input type="text" name="email" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<label>PASSWORD:</label>
				<input type="password" name="password" style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;"></input>
				<br>
				<br>
				<input type="Submit" name="Submit" value="Confirm" style="border-radius:25px;">
				<input type="Reset" name="Reset"value="Cancel" style="border-radius:25px;">
				</tt>
				</form>
			</div>
		</div>
		<!--..SETTINGS-->
		
		
		<div class="body">	
		<div class="barrier">
			<div class="community" style="background-color:transparent;">
				<img src="../res/community.png" width="100%" height="100%">
			</div>
		</div>
		<div class="stickybody">
			<?php
				$connect = mysql_connect("localhost","root","") or die("Couldn't Connect!");
				mysql_select_db("obbs") or die("Couldn't find DB!");
				
				$query = mysql_query("SELECT * FROM `mailbox` WHERE enabled = 1 AND start <= CURRENT_DATE AND expiry > CURRENT_DATE ");
				
				$numrows = mysql_num_rows($query);
				
				if($numrows != 0){		
					while($row = mysql_fetch_assoc($query)){
						$dbid = $row['id'];
						$dbuserid = $row['userid'];
						$dbname = $row['name'];
						$dbtitle = $row['title'];
						$dbcontent = $row['content'];
						$dbstart = $row['start'];
						$dbexpiry = $row['expiry'];	
						$dbtimeposted = $row['timeposted'];
						
						echo '<a href="#'.$dbid.'" onClick="javascript:alert(postnum = '.$dbid.')" style="text-decoration:none; color:black;">';
						echo '<div class="sticky" >';
						echo '<div class="text" style="border:solid 10px transparent;">';
						//echo '<a href="#openModalthisPost'.$dbid.'" style="text-decoration:none; color:black;"><h2 align="center">-'.$dbtitle.'-</h2></a>';
						echo '<h2 align="center">-'.$dbtitle.'-</h2>';
						echo '<h4>By: '.$dbname.'</h4>';
						echo '<strong>Details:</strong><br><br>';
						echo $dbcontent;
						echo '<br><br>';
						echo '<p><i>This post will expire @: '.$dbexpiry.'</i></p>';
						echo '</div>';
						echo '</div>';
						echo '</a>';
						
						
						//POST MODAL DIVISION**
						echo '<div id="'.$dbid.'" class="modalDialog" style="font-family:agency fb;">';
						echo '<div>';
						echo '<a href="#close" title="Close" class="close">X</a>';
						echo '<h2 align="center">-'.$dbtitle.'-</h2>';
						echo '<h4>By: '.$dbname.'</h4>';
						echo '<strong>Details:</strong><br><br>';
						echo $dbcontent;
						echo '<br><br>';
						echo '<p><i>This post will expire @: '.$dbexpiry.'</i></p>';
						echo '<h4>COMMENTS:</h4>';
						$querycomments = mysql_query("SELECT * FROM comment WHERE postid = '$dbid'");
						
						$numrowcom = mysql_num_rows($querycomments);
						
						if($numrowcom > 0){
							while($rowcom = mysql_fetch_assoc($querycomments)){
								$dbcomid = $rowcom['commentid'];
								$dbcomuserid = $rowcom['commentuserid'];
								$dbcompostid = $rowcom['postid'];
								$dbcomment = $rowcom['text'];
								
								$finduser = mysql_query("SELECT * FROM accounts WHERE id = '$dbcomuserid'");
								$rowuser = mysql_fetch_assoc($finduser);
								echo '<strong>'.$rowuser['fname']." ".$rowuser['lname'].":&nbsp&nbsp</strong>";
								echo $dbcomment.'</br>';
							}
							
						}
						else if ($numrowcom == 0){
							echo 'No comments!';
						}
						
						
						//echo '<form action="getpostid.php?pid=" method="post">';
						echo '<br><input type="text" id="mycomment" name="comment" placeholder="Write a comment." style="width:50%; border-radius:25px; border:solid black 1px; border-top-left-radius:0px; outline: none;" ></input>';
						echo '<input type="button" name="submit" value="comment" onClick="getComment(postnum)" style="border-radius:25px; outline:none;"></input>';
						
						
						//echo '</form>';
						echo '</div>';
						echo '</div>';
						

					}
				}		
			?>
			
		</div>
		</div>
		</tt>
	</body>
</html>