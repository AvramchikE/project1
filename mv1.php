<?php
$array = [];
for ($i = 0; $i < 100; $i++) {
	$array[] = rand(1, 1000);
}
echo '<p>Исходящий массив</p>';
echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);
print_r($array);
