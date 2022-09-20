<?php 

$r = [];
if (($file = fopen('data.csv', 'r')) !== false){
	while (($data = fgetcsv($file, 1000, ",")) !== false){
		$r[] = $data;
	}
	fclose($file);
}
print_r ($r);