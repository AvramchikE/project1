<?php
echo 'Тест вывода массива php<br><br>';

$z = A,  $z--;
for ( $y = a; $y <= d; $y++ )
{
	for ( $x = 1; $x <= 4; $x++ and $z++)
	{
		$array[$y][$x] = $z;
		echo '[' . $y . '][' . $x. ']=' . $z. ' ';
	}
	echo '<br>';
}

echo '<br><br>';
echo $array;
echo '<br><br><br>';

print_r($array);
echo '<br><br><br>';

echo '<pre>';
print_r($array);
echo '</pre>';
?>