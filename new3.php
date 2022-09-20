<?php

$a = array (
array(1,2,3),
array('ni','hello', 'test'),
array(4,5,6)
);

$file = fopen('data1.csv', 'w');
foreach($a as $line){
	fputcsv($file, $line);
	
}
fclose($file);