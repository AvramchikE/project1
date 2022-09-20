<?php 

function debug($data){
	echo '<pre>' . print_r ($data, return: 1) . '</pre>';
}

$array = range(0, 100);
shuffle($array);
debug($array);
sort($array);
debug($array);
