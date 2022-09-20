<?php

class MyClass
{
public $My = 'Класс MyClass иницализирован!';
public function getMy()
{
	echo $this->My;
}
}
$object = new MyClass;
$object->getMy();