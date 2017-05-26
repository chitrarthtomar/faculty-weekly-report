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
		$host="mysql7.000webhost.com"; 
		$user="a3728862_fwr"; 
		$pass="ashwin@8951637710"; 
		$db="a3728862_test";  
		$con = mysql_connect($host, $user,$pass);
			if(!$con)
			{
				die("Cannot connect: ".mysql_error());
			}
		mysql_select_db($db);
		$c=$_COOKIE["user"];
		if(isset($_POST['changePass'])){
			echo "<form class=form action=edit.php method=post>";
				echo "Enter the New Password:";		
				echo "<input type='password' name=newPassword placeholder=Password />";
			echo "<button type=submit name=changePassword id=login-button>Change</button>";
			echo "</form>";
			echo "<form class=form action=FacultyTable.php method=post>";
			echo "<button type=submit name=Back id=login-button>Go Back</button>";
			echo "</form>";
			};
		
		if(isset($_POST['changePassword']))
		{	
			if(strlen($_POST['newPassword'])>8 || strlen($_POST['newPassword'])<4 )
			{
				echo "<script>alert('Invalid form of password. Word length must be 4-8 characters'); location.href='FacultyTable.php';</script>"; 
				exit(0);
			}
			$ChangePassword = "UPDATE employees SET pwd='$_POST[newPassword]' WHERE empid='$c'";
			mysql_query($ChangePassword, $con);
			echo "<script>alert('Password Successfully Changed'); location.href='FacultyTable.php';</script>"; 
				exit(0);
		}
			
		if(isset($_POST['logout'])){
			header("location:Faculty.php");
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