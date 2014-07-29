<?php

$data=file_get_contents("warp_triple.data");

$lines=preg_split("/\n/",$data);
foreach($lines as $line) {
	$tmp=array();
	$table='warp_triple';
	$n=sscanf($line,"%s %s %s %d %d %s %s %s %s %s %f %d",$race,$era,$type,$mass,$power,$ea,$computer_req,$stress1,$dash,$stress2,$ss,$year);
	$pat="INSERT INTO {$table} VALUES (default,'%s','%s','%s',%d,%d,'%s','%s %s %s',%f,%d)";
	$sql=sprintf($pat,$race,$era,$type,$mass,$power,$computer_req,$stress1,$dash,$stress2,$ss,$year);
	print $sql.";\n";
}
