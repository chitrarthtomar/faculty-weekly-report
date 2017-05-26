<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleteachrep.css">
  </head>

  <body>
	 <?php
	echo "<img id=logo src=img/logo.png /><p id=bmsceheader>BMSCE Faculty</p>";
    echo "<div class=wrapper>";
	echo "<div class=container>";
			$host="mysql7.000webhost.com"; 
			$user="a3728862_fwr"; 
			$pass="ashwin@8951637710"; 
			$db="a3728862_test";  
			$con = mysql_connect($host, $user,$pass);
			if(!$con)
			{
				die("Cannot connect: ".mysql_error());
			}
			mysql_select_db($db,$con);
			 
			echo "<h1>Welcome</h1>";
			if(isset($_POST['view']))
			{
			$name=$_POST['teachername'];
			$sql="SELECT * FROM employees WHERE name='".$name."'";
			$res=mysql_query($sql);		
			if(mysql_num_rows($res)==0)
			{
				echo "<script>alert('Please enter the right name'); location.href='teacherReport.php';</script>";
				exit(0);
			}			
			echo "<table>
				<tr>
				<th align='center'>Class</th>
				<th align='center'>Subject</th>
				<th align='center'>Total No. Of Hours</th>
				<th align='center'>Hours Handled</th>
				<th align='center'>Hours not Handled</th>
				<th align='center'>Reason for class not Handled</th>
				</tr>";
			while($record=mysql_fetch_array($res)){
				echo "<form class=form action=FacultyTable.php method=post>";
				echo "<tr>";
				echo "<td align='center'>" . $record['class'] . "</td>";
				echo "<td align='center'>" . $record['subject'] . "</td>";
				echo "<td align='center'>" . $record['hours'] . "</td>";
				echo "<td align='center'>" . $record['handled'] . "</td>";
				echo "<td align='center'>" . $record['unhandled'] . "</td>";
				echo "<td align='center'>" . $record['reason'] . "</td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table>";
			echo "<form class=form action=adminMain.php method=post>";
			echo "<button type=submit name=Back id=login-button>Go Back</button>";
			echo "</form>";
			mysql_close($con);
	echo "</div>";
echo "</div>"; 
exit(0);
			};
		?>
		<form class="form" action="teacherReport.php" method="post">
			<p>Enter the name of the teacher below :</p>
			<input type="text" name="teachername" placeholder="Teacher's name here">
			<button type="submit" name="view"id="login-button">View Report</button>
		</form>
		<form class="form" action="adminMain.php" method="post">
			<button type="submit" name="Back"id="login-button">Go Back</button>
		</form>
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
