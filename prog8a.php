<!DOCTYPE HTML>
<html>
<head>
	<style>
		table,th,td
		{
			background-color:DarkGrey;
			width:33%;
			text-align:center;
			border-collapse:collapse;
			border:2px solid black;
		}
		table{margin:auto;}
		input{text-align:left}
	</style>
</head>

<body>
	<form method="post">
		<table>
			<tr><th colspan="3"> SIMPLE CALCULATOR </th> </tr>
			<tr>
				<td> First Number : </td> 
				<td><input type="input" name="num1" ></td>
				<td rowspan="2"><input type="submit" name="submit" value="calculate"> </td>
			</tr>
			<tr>
				<td> Second Number : </td>
				<td><input type="input" name="num2"> </td>
			</tr>
	</form>

	<?php 
		if(isset($_POST["submit"]))
		{
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
				
			if(is_numeric($num1) and is_numeric($num2))
			{
				echo "<tr><td> ADDITION: </td><td>".($num1+$num2)."</td></tr>";
				echo "<tr><td> SUBTRACTION: </td><td>".($num1-$num2)."</td></tr>";
				echo "<tr><td> DIVISION: </td><td>".($num1/$num2)."</td></tr>";
				echo "<tr><td> MULTIPLICATION: </td><td>".($num1*$num2)."</td></tr>";
				echo "</table>";
			}
			else 
			{
				echo "<script type='text/javascript'> alert('enter valid number'); </script>";
			}
		}
    ?>
</body>
</html>