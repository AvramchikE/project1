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

$file = 'result.txt';
file_put_contents($file, $array, LOCK_EX);


