<?php
$av = array();
if (($file = fopen('data.csv', 'r'))) {
$header = fgetcsv($file);
while ($row = fgetcsv($file)) {
  $av[] = array_combine($header, $row);
}

}
$reversed = array_reverse($av);


print_r($reversed);

$file = fopen('data1.csv', 'w');
 foreach($reversed as $line){
	 fputcsv($file, $line);
 }
 fclose($file);