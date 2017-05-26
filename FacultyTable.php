<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Weekly Report</title>        
        <link rel="stylesheet" href="css/styleTable.css">
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
			 
			$c=$_COOKIE["user"];
			if(isset($_POST['Back']))
			{	
					header("location:FacultyTable.php");
					exit(0);
			};
			if(isset($_POST['update']))
			{	
				$sql="SELECT * FROM employees WHERE prime='$_POST[hidden]'";
				$res=mysql_query($sql);
				$record=mysql_fetch_array($res);
				if(($_POST['hand']+$_POST['unha']==$record['hours'] && $_POST['reas']!="Yet to Update") || ($_POST['hand']==0 && $_POST['unha']==0 && $_POST['reas']=="Yet to Update")){
				$UpdateQuery = "UPDATE employees SET handled='$_POST[hand]', unhandled='$_POST[unha]', reason='$_POST[reas]' WHERE prime='$_POST[hidden]'";
				mysql_query($UpdateQuery, $con);
				}
				else
				{
					echo "<script>alert('Wrong input of hours handled/unhandled'); location.href='FacultyTable.php';</script>"; 
					exit(0);
				}
			};
		
			$sql="SELECT * FROM employees WHERE empid='".$c."'";
			$res=mysql_query($sql);	
			$record=mysql_fetch_array($res);
			$name=$record['name'];
			echo "<h1>Welcome,  $name</h1>";
			$sql="SELECT * FROM employees WHERE empid='".$c."'";
			$res=mysql_query($sql);	
			echo "<br />";
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
				echo "<td align='center'><input type='text' name=hand value='".$record['handled']."' size='1' /> </td>";
				echo "<td align='center'><input type='text' name=unha value='".$record['unhandled']."' size='1' /> </td>";
				echo "<td align='center'><input type='text' name=reas value='".$record['reason']."' size='16' /> </td>";
				echo "<td align='center'><input type='hidden' name=hidden value='".$record['prime']."' size='16' /> </td>";
				echo "<td><button type=submit name=update >Update</button></td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table>";
			mysql_close($con);
			echo "<br />";
			echo "<form class=form  style={position:absolute;left:39%;top:90%;} action=edit.php method=post>";
			echo "<input type=submit name=changePass value='Change Password' />";
			echo "<button type=submit name =logout >Logout</button>";
			echo "</form>";
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
