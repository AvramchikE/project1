<?php
$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE){
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>
