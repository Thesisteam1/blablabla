<html>
<head>

<link rel="stylesheet" href="css/dividepage.css">
<link rel="stylesheet" href="css/text.css">
<link rel="stylesheet" href="css/userbutton.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/table.css">

<link rel="stylesheet" href="css/input.css">
<link rel="stylesheet" href="css/nav.css">

<style>
input.one[type="password"], input.one[type="text"] {
  background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 31px 0 0 29px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input.one[type="password"]:focus, [type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
input.one[type="radio"] {
  cursor: pointer;
  height: 16px;
  opacity: 5;
  position: relative;
  width: 64px;
  
}
.login {
  background-color:white;
  border: 1px solid green;
  border-radius: 6px;
  border-color: green;
  
  height: 250px;
  margin: 20px auto 0;
  width: 298px;
  align:right;
}
input.one[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:black;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:6px;
  margin: 29px 0 0 29px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color: #3ac140;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}


</style>

</head>
<body>
<?php
include('config.php');

?>


  
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
<li><a href="adminhome.php" >Home</a></li>
<li><a href="adminlogout.php">Logout</a></li>

<li><a href="upload fies.php">Upload Files</a></li>

<li><a href="add account.php" >Add Account</a></li>

<li><a href="add dept.php" class="active">Add Department</a></li>

<li><a href="delete dept.php">Delete Department</a></li>

  <hr/>
   <p align="center"><font face="italic" color="black">Change Password</p>

<form method="POST" action="changepass.php">
<table align="center">
					<tr>
						<td>
							<input type="text" placeholder="Username" name="un" id="username" style="width: 200px; height: 25px" class="inputstyle">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" placeholder="Password" name="pw" id="password" style="width: 200px; height: 25px" class="inputstyle">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" placeholder="New Password" name="psw" id="newpassword" style="width: 200px; height: 25px" class="inputstyle">
						</td>
					</tr>
					<tr>
						<td align="right">
							<input type="submit" value="Change" class="button1 medium green">
						</td>
					</tr>
   </table>
  
   
</form>
<hr/>

</div>
</nav>
	
 
<article>

<div class="login">
<form method="GET" action="add deptscript.php">

    <input type="text" class="one" placeholder="Department" name="dept" id="Department"  required/>  
  <input type="password" class="one" placeholder="Depatment id" name="deptid" id="Depatment id"  required/> 
  
 
  
  <input type="submit" class="one" value="ADD DEPARTMENT">
</div>




</table>


  </article>
  </body>
  </html>