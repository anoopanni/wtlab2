<?php 

	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$states1=explode(" ",$states);
	echo "Original array: </br>";
	foreach($states1 as $i=>$value)
		print "STATES[$i]=$value </br>";
		
	foreach($states1 as $state)
	{
		if(preg_match('/xas$/',($state)))	
			$statearray[0]=$state;
	}
	
	foreach($states1 as $state)
	{
		if(preg_match('/^k.*s$/i',($state)))	
			$statearray[1]=$state;
	}
	
	foreach($states1 as $state)
	{
		if(preg_match('/^M.*s$/',($state)))	
			$statearray[2]=$state;
	}
	
	foreach($states1 as $state)
	{
		if(preg_match('/a$/',($state)))	
			$statearray[3]=$state;
	}
	
	echo "Resultant array : </br>";
	foreach($statearray as $i=>$value)
	{
		print("STATES[$i]=$value");
		print "</br>";
	}
	
	
?>
		