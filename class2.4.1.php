<?php 
$time = DateTime::createFromFormat("Y-m-d", '2022-09-12'); 
$date = DateTime::createFromFormat("Y-m-d", '2001-06-07'); 
$interval = $time->diff($date); 
echo "Разница: ";
echo $interval->y, " год, "; 
echo $interval->m, " месяца, "; 
echo $interval->d, " дней."; 
