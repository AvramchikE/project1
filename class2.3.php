<?php

class sorting
{
    protected $_sort;
    
    public function __construct(array $sorts)
     {
        $this->_sort = $sorts;
     }
    public function afsort()	
     {
        $sorted = $this->_sort;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new sorting(array(15, -9, 6, 43, 12, 67, -34, -27));
print_r($sortarray->afsort());
