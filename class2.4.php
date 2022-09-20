<?php

$date1 = strtotime("2011-06-26 ");
$date2 = strtotime("2034-05-12");

$diff = abs($date2 - $date1);

$years = floor($diff / (365*60*60*24));

$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));

$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("Різниця %d years, %d months, %d days", $years, $months, $days);