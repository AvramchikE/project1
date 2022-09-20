<?php
$av = array();
if (($file = fopen('data.csv', 'r'))) {
$header = fgetcsv($file);
while ($row = fgetcsv($file)) {
  $av[] = array_combine($header, $row);
}
}
print_r($av);