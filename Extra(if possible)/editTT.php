<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleEdit.css">
  </head>

  <body>
	<?php
	echo "<img id=logo src=img/logo.png /><p id=bmsceheader>BMSCE Faculty</p>";
    echo "<div class=wrapper>";
	echo "<br /><br />";
	echo "<div class=container style={height:600px;}>";
	echo "<h1>Welcome</h1>";
		$host="localhost"; 
		$user="root"; 
		$pass=""; 
		$db="test"; 
		$con = mysql_connect($host, $user,$pass);
			if(!$con)
			{
				die("Cannot connect: ".mysql_error());
			}
		mysql_select_db($db);

		if(isset($_POST['edit'])){
			$name=$_POST['name'];
			setCookie('name', $name, time() + (86400 * 30), "/");
			if ($name == "" ) {
				echo "<script>alert('Please enter the name of the teacher'); location.href='editTT.php';</script>"; 
				exit(0);
				}
			$sql="SELECT * FROM employees WHERE name='$name'";
			$res=mysql_query($sql);
			if(mysql_num_rows($res)>=1){
				echo "<form class=form action=edit.php method=post>";
				echo "Choose the field you want to edit:";		
				echo "<input type='submit' name=pass value=Password />";
				echo "<input type='submit' name=class value=Class />";
				echo "<input type='submit' name=subject value=Subject />";
				echo "<input type='submit' name=hour value='Hours Handled' />";
				echo "<button type=submit name=Back id=login-button>Go Back</button>";
				echo "</form>";
			}
			else	
			{
				echo "<script>alert('Invalid name'); location.href='editTT.php';</script>"; 
				exit(0);
			}				
		exit(0);
		};
		if(isset($_POST['Back'])){
			header("location:adminMain.php");
			exit(0);
			};
		mysql_close($con);
		echo "</div>";
	
		echo "<ul class=bg-bubbles>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
			echo "<li></li>";
		echo "</ul>";
	echo "</div>"; 
			
?>
	<img id="logo" src="img/logo.png" /><p id="bmsceheader">BMSCE Faculty</p>
    <div class="wrapper">
	<div class="container" style="height:400px;padding:60px 0;">
		<h1>Welcome</h1>
		
		<form class="form" action="editTT.php" method="post">
			Enter the teacher's name:<input type="text" name="name" placeholder="Employee name">
			<button type="submit" name ="edit" id="login-button">Begin Edit</button>
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