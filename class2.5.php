<?php

class Calculator{
public $_value, $_value1;
public function __construct( $value, $value1 ){
$this->_value = $value;
$this->_value1 = $value1;
}
public function добавить(){
return $this->_value + $this->_value1;
}
public function отнять(){
return $this->_value - $this->_value1;
}
public function умножить(){
return $this->_value * $this->_value1;
}
public function разделить(){
return $this->_value / $this->_value1;
}
}
$calc = new Calculator(24, 8);
echo $calc-> добавить()."\n";
echo $calc-> отнять()."\n";
echo $calc-> умножить()."\n";
echo $calc-> разделить()."\n";

