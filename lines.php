<?php

$data=file_get_contents("computer.data");

$lines=preg_split("/\n/",$data);
foreach($lines as $line) {
	$tmp=array();
	$table='computers';
	$n=sscanf($line,"%s %s %s %d %s %s %s %f %d %s %d %d",$race,$era,$type,$mass,$class1,$dash,$class2,$ss,$wdf,$avail,$cost,$date);
	$pat="INSERT INTO {$table} VALUES (default,'%s','%s','%s',%d,'%s%s%s',%f,%d,'%s',%d,%d)";
	$sql=sprintf($pat,$race,$era,$type,$mass,$class1,$dash,$class2,$ss,$wdf,$avail,$cost,$date);
	print $sql.";\n";
}
