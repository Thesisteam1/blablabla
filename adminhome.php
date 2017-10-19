<html>
	<head>
		<link rel="stylesheet" href="css/dividepage.css">
		<link rel="stylesheet" href="css/text.css">
		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" href="css/userbutton.css">
		<link rel="stylesheet" href="css/table.css">
		<link rel="stylesheet" href="css/input.css">
	</head>
	<body>
		<?php
		session_start();
		$users = $_SESSION['un'];
		$passes = $_SESSION['pw'];
		include('config.php');
		include('adlock.php');
		?> 
		
		W E L C O M E!!
	<div class="header">
		<div>
			<img src="pictures/s.i.png" alt="bir" width="150" height="150" align="left">
		</div>
		<div>
			<p><font face="Segoe UI Black"size="15">Municipal of San Isidro</font></p>
			<p><font face="Segoe UI Black"size="15">Online Document Archive</font></p>
		</div>
	</div>
	<br>
	<div class="container">
		<nav>
			<ul>
				<li><a href="adminhome.php" class="active">Home</a></li>
				<li><a href="adminlogout.php">Logout</a></li>
				<li><a href="upload fies.php">Upload Files</a></li>
				<li><a href="add account.php">Add Account</a></li>
				<li><a href="add dept.php">Add Department</a></li>
				<li><a href="delete dept.php">Delete Department</a></li>
				<br>
				<hr/>
				<br>
				<p align="center"><font face="italic" color="black">Change Password</p>
				<form method="POST" action="changepass.php">
				<table align="center">
					<tr>
						<td>
							<input type="text" placeholder="Username" name="un" id="username" style="width: 200px; height: 25px" class="inputstyle" required/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" placeholder="Password" name="pw" id="password" style="width: 200px; height: 25px" class="inputstyle"required/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" placeholder="New Password" name="psw" id="newpassword" style="width: 200px; height: 25px" class="inputstyle" required/>
						</td>
					</tr>
					<tr>
						<td align="right">
							<input type="submit" value="Change" class="button1 medium green">
						</td>
					</tr>
				</table>
				</form>
				<br>
				<hr/>
				<br>
			</ul>
		</nav>
	</div>
	<article>

		<table id="t01">
		<?php
			$query = "SELECT * FROM documents ORDER BY date";
			$result = mysql_query($query);
			$num = mysql_numrows($result);
			$a = 0;
	
			echo "<table id = 't01'>";
			echo "<th>Filename</th>";
			echo "<th>Date</th>";
			echo "<ul>";
			while ($a < $num){
				$folder = mysql_result($result,$a,"file");
				$subject = mysql_result($result,$a,"subject");
				$cdate = mysql_result($result,$a,"date");
				$deptid = mysql_result($result,$a,"deptid");
				$pdffile = mysql_result($result,$a,"filename");
		
				echo "<tr>";
				echo "<td>";
				echo "<a href='".$folder.$pdffile."' target=_blank>".$subject."</a>";
				echo "</td>";
				echo "<td>";
				echo $cdate;
				echo "</td>";
				echo "</tr>";
		
				$a++;
			}
			echo "</ul>";
			echo "</table>";
		?>
		</table>
	</article>
</body>
</html>