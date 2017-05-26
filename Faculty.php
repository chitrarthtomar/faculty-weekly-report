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

		if(isset($_POST['login'])){
			$username=$_POST['username']; 
			$password=$_POST['password'];
			$sql="SELECT * FROM employees WHERE empid='".$username."' and pwd='".$password."' LIMIT 1";
			$res=mysql_query($sql);

			if(mysql_num_rows($res)>=1){
				if(!strcmp($username,"admin"))
				{
					header("location:adminMain.php");
				}
				else{
					setcookie(user, $username, time() + (86400 * 30), "/");
					header("location:FacultyTable.php");
					}
				exit();
				}
				else {
				echo "<script>alert('Wrong username/password'); location.href='Faculty.php';</script>";
				exit(0);
	
				exit();
					}
			}
?>
	<img id="logo" src="img/logo.png" /><p id="bmsceheader">BMSCE Faculty</p>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" action="Faculty.php" method="post">
			<input type="text" name="username" placeholder="Teacher ID">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name ="login" id="login-button">Login</button>
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
