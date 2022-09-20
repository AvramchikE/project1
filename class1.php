<?php

class text
{
	public $word = 'Hello';
	public function getword()
	{
		echo $this->word;
	}
}

$object = new text();

$object->getword();

class text1 extends text {
	
	
	 public function getword() {
		$this->inter = "\n hello from child";
		echo $this->inter;
	}
}
$tt = new text1();
echo $tt->getword();
