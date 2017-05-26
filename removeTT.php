<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
	<?php
		$host="mysql7.000webhost.com"; 
		$user="a3728862_fwr"; 
		$pass="ashwin@8951637710"; 
		$db="a3728862_test";  
		mysql_connect($host, $user,$pass);
		mysql_select_db($db);

		if(isset($_POST['delete'])){
			$employee=$_POST['employee']; 
			$class=$_POST['class'];
			
			if ($employee == "" || $class == "") {
				echo "<script>alert('Invalid Input'); location.href='removeTT.php';</script>"; 
				exit(0);
				}
			$sql="DELETE FROM employees WHERE name='$employee' and class	='$class' ";
			$res=mysql_query($sql);

			if($res){
				echo "<script>alert('Succesfully Deleted'); location.href='addremovTT.php';</script>";
				exit(0);
				}
			};
		if(isset($_POST['Back'])){
			header("location:addremovTT.php");
			exit(0);
			};
?>
	<img id="logo" src="img/logo.png" /><p id="bmsceheader">BMSCE Faculty</p>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" action="removeTT.php" method="post">
			<input type="text" name="employee" placeholder="Teacher name">
			<input type="text" name="class" placeholder="Class">
			<button type="submit" name ="delete" id="login-button">Delete Record</button>
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