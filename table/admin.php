<?php
	session_start();
	
?>


<html>
	<head>
	</head>
	<body>
		<tt>
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-family:agency fb;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal; text-align:center;}
		.tg th{font-family:agency fb;font-size:25px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
		.tg .tg-9hbo{font-weight:bold;vertical-align:top;background-color:green}
		.tg .tg-yw4l{vertical-align:top}
		</style>
		<table class="tg">
		<tr> 

			<th class="tg-9hbo">REQUEST #</th>
			<th class="tg-9hbo">TIME POSTED</th>
			<th class="tg-9hbo">START DATE</th>
			<th class="tg-9hbo">EXPIRY DATE</th>
			<th class="tg-9hbo">USER NAME</th>
			<th class="tg-9hbo">HEADER</th>
		</tr>
		<?php
			$connect = mysql_connect("localhost","root","") or die("Couldn't Connect!");
			mysql_select_db("obbs") or die("Couldn't find DB!");
			
			$query = mysql_query("SELECT * FROM mailbox WHERE 1");
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

					echo 	'<tr>';
					//echo	'<td class="tg-yw4l"><button onclick="sayHelloWorld()">DELETE</button></td>';
					echo	'<td class="tg-yw4l">'.$dbid.'</td>';
					echo	'<td class="tg-yw4l">'.$dbtimeposted.'</td>';
					echo	'<td class="tg-yw4l">'.$dbstart.'</td>';
					echo	'<td class="tg-yw4l">'.$dbexpiry.'</td>';
					echo	'<td class="tg-yw4l">'.$dbname.'</td>';
					echo	'<td class="tg-yw4l">'.$dbtitle.'</td>';
					echo	'</tr>';
				}
			}	
		?>
		
		<script>
		function sayHelloWorld() {
			var hello = "hello";
			var world = "world";
			window.location.href = "admin.php?w1=" + hello + "&w2=" + world;
		}
		</script>
		
		<?php
			if(isset($_GET["w1"])){
				$hello = $_GET["w1"];
				echo $hello;	
			}
		?>
		
		</table>
		<br>
		<label>Input the request # you wish to be deleted: </label>
		<form action="delmail.php" method="post">
		<input type="text" name="reqno"></input>
		<input type="submit" name="submit" value="DELETE?"></input>
		<p><h3 align="center">END OF RESULTS</h3></p>
		</tt>
	</body>
</html>