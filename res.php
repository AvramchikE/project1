<?php
$array = [];
for ($i = 0; $i < 20; $i++) {
	$array[] = rand(1, 100);
}
echo '<p>Исходящий массив</p>';
echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);
print_r($array);

$result = implode( "\n", $array);
$file = fopen("result.txt", "w");
fwrite($file, $result);
fclose($file);
