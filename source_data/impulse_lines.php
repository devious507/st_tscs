<?php

$data=file_get_contents("impulse.data");

$lines=preg_split("/\n/",$data);
foreach($lines as $line) {
	$tmp=array();
	$table='impulse';
	$n=sscanf($line,"%s %s %s %d %d %s %s %s %f %d",$race,$era,$type,$mass,$power,$computer_req,$stress1,$stress2,$ss,$year);
	$pat="INSERT INTO {$table} VALUES (default,'%s','%s','%s',%d,%d,'%s','%s - %s',%f,%d)";
	$sql=sprintf($pat,$race,$era,$type,$mass,$power,$computer_req,$stress1,$stress2,$ss,$year);
	print $sql.";\n";
}
