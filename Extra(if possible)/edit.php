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
		$name=$_COOKIE["name"];
		if(isset($_POST['pass'])){
			echo "<form class=form action=edit.php method=post>";
				echo "Enter the New Password:";		
				echo "<input type='text' name=newPassword placeholder=Password />";
			echo "<button type=submit name=changePassword id=login-button>Change</button>";
			echo "</form>";
			};
		if(isset($_POST['changePassword']))
		{	
			$ChangePassword = "UPDATE employees SET pwd='$_POST[newPassword]' WHERE name='$name'";
			mysql_query($ChangePassword, $con);
			echo "<script>alert('Successfully Changed'); location.href='editTT.php';</script>"; 
				exit(0);
		}
		
		
		if(isset($_POST['class'])){
			header("location:editTT.php");
			exit(0);
			};
			
			
		if(isset($_POST['subject'])){
			header("location:editTT.php");
			exit(0);
			};
			
			
		if(isset($_POST['hour'])){
			header("location:editTT.php");
			exit(0);
			};
			
			
		if(isset($_POST['Back'])){
			header("location:editTT.php");
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
  </body>
</html>