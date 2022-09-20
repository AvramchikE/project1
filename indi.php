<?php

$handle = fopen("data.csv", "r");
$lineNumber = 1;
while (($file = fgets($handle)) !== false) {
    $row = str_getcsv($file);
    var_dump($row);
    $lineNumber++;
}
fclose($handle);
?>