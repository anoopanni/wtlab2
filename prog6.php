<!DOCTYPE HTML>
<head>
<meta http-equiv="refresh" content="1"/>

</head>

<?php


	print "<h3> REFRESH PAGE </h3>";
	$name="counter.txt";
	$file=fopen($name,"r");
	$hits=fscanf($file,"%d");
	fclose($file);
	print "count of visits:".$hits[0];
	
	$hits[0]++;
	
	$file=fopen($name,"w");
	fprintf($file,"%d",$hits[0]);
	fclose($file);

?>