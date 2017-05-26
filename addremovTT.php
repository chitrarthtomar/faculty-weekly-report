<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleaddremovTT.css">
  </head>

  <body>
  <?php
$host="mysql7.000webhost.com"; 
$user="a3728862_fwr"; 
$pass="ashwin@8951637710"; 
$db="a3728862_test";  
mysql_connect($host, $user,$pass);
mysql_select_db($db);

if(isset($_POST['add'])){
	header("location:addTT.php");
	exit(0);
}
if(isset($_POST['remove'])){
	header("location:removeTT.php");
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
		
		<form class="form" action="addremovTT.php" method="post">
			<input type="submit" name="add" value="Add teacher record" />
			<input type="submit" name="remove" value="Remove teacher record " />
			<br /><br />
			<button type="submit" name ="Back" id="login-button">Go Back</button>
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