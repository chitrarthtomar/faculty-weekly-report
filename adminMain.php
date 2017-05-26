<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleadmin.css">
  </head>

  <body>
  <?php
$host="mysql7.000webhost.com"; 
$user="a3728862_fwr"; 
$pass="ashwin@8951637710"; 
$db="a3728862_test";  
mysql_connect($host, $user,$pass);
mysql_select_db($db);

if(isset($_POST['logout'])){
	header("location:Faculty.php");
	exit(0);
}
if(isset($_POST['tearep'])){
	header("location:teacherReport.php");
	exit(0);
}
if(isset($_POST['clarep'])){
	header("location:classReport.php");
	exit(0);
}
/*if(isset($_POST['editte'])){
	header("location:editTT.php");
	exit(0);
}*/
if(isset($_POST['addate'])){
	header("location:addremovTT.php");
	exit(0);
}
if(isset($_POST['Back'])){
	header("location:adminMain.php");
	exit(0);
}
?>
	<img id="logo" src="img/logo.png" /><p id="bmsceheader">BMSCE Faculty</p>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome, admin </h1>
		
		<form class="form" action="adminMain.php" method="post">
			<input type="submit" name="tearep" value="View Teacher Report" />
			<input type="submit" name="clarep" value="View Class Report" />
			<!--<input type="submit" name="editte" value="Edit Teacher Record" />-->
			<input type="submit" name="addate" value="Add/Remove Teacher" />
			<br /><br />
			<button type="submit" name ="logout" id="login-button">Logout</button>
		</form>	
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>    
  </body>
</html>