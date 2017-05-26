<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleaddTT.css">
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
			$form1=$_POST['empid'];
			$form2=$_POST['name'];
			$form3=$_POST['class'];
			$form4="{$form1}{$form3}";
			$form5=$_POST['subject'];
			$form6=$_POST['hours'];
			
			if ($form1 == "" || $form2 == "" || $form4 == "" || $form5 == "" || $form6 == "" ) {
				echo "<script>alert('Please input in all the fields'); location.href='addTT.php';</script>"; 
				exit(0);
				}
			$sql="INSERT INTO employees (empid,name,class,prime,subject,hours) VALUES ('$form1','$form2','$form3','$form4','$form5','$form6')";
			$res=mysql_query($sql);

			if($res){
				echo "<script>alert('Succesfully Added'); location.href='addremovTT.php';</script>";
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
		
		<form class="form" action="addTT.php" method="post">
			Teacher ID:<input type="text" name="empid" placeholder="Teacher ID">
			Teacher name:<input type="text" name="name" placeholder="Teacher name">
			Class handling:<input type="text" name="class" placeholder="Class handling">
			Subject:<input type="text" name="subject" placeholder="Subject">
			Hours:<input type="text" name="hours" placeholder="Hours">
			<button type="submit" name ="add" id="login-button">Add Record</button>
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