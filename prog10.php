<!DOCTYPE HTML>
<hmtl>
<head>
	<style>
		table,td,th
		{
			border:2px solid black;
			border-collapse:collapse;
			background-color:;
			width:33%
			text-align:center
		}
		table{margin:auto;}
		input{text-align:left;}
	</style>
</head>

<body>

	<?php 
		
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="students";
		$a=array();
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		
		if($conn->connect_error)
			$conn.die("connection failed".$conn.connect_error);
		
		$sql="select * from student";
		$result = $conn->query($sql);
		echo "</br>";
		echo "<center> BEFORE SORTING </center>";
		echo "<table>";
		echo "<tr><th>USN</th><th>NAME</th><th>Address</th></tr>";

		if($result->num_rows>0)
		{
			while($rows=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$rows["usn"]."</td>";
				echo "<td>".$rows["name"]."</td>";
				echo "<td>".$rows["address"]."</td></tr>";
				
				array_push($a,$rows["usn"]);
			}
		}
		else 
			echo "Table is empty";
		echo "</table>";
		
		$n=count($a);
		
		for($i=0;$i<($n-1);$i++)
		{
			$pos=$i;
			for($j=$i+1;$j<$n;$j++)
			{
				if($a[$pos]>$a[$j])
					$pos=$j;
			}
			if($pos!=$i)
			{
				$temp=$a[$i];
				$a[$i]=$a[$pos];
				$a[$pos]=$temp;
			}
		}
		
		
		$c=array();
		$d=array();
		
		$result=$conn->query($sql);
		
		if($result->num_rows>0)
		{
			while($rows=$result->fetch_assoc())
			{
				for($i=0;$i<$n;$i++)
				{
					if($rows["usn"]==$a[$i])
					{
						$c[$i]=$rows["name"];
						$d[$i]=$rows["address"];
					}
				}
			}
		}
		
		echo "</br>";
		echo "<center> AFTER SORTING : <center> ";
		echo "<table>";
		echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
		
		for($i=0;$i<$n;$i++)
		{
			echo "<tr>";
			echo "<td>".$a[$i]."</td>";
			echo "<td>".$c[$i]."</td>";
			echo "<td>".$d[$i]."</td></tr>";
		}
		echo "</table>";
		$conn->close();
	?>
	
	</body>
</html>