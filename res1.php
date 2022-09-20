<?php
$array = [];
for ($i = 0; $i < 31; $i++) {
	$array[] = rand(1, 155);
}
sort($array);
$result = implode( "\n", $array);
$file = fopen('data.txt', 'w');
fwrite($file, $result);

fclose($file);
