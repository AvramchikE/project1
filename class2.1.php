<?php

class MyClass 
{
	public $My = ' Привет всем, я ';
	public function introduce($name)
	{
		return $this->My.$name;
	}
}
$Mya = new MyClass;
echo $Mya->introduce('Cкотт');