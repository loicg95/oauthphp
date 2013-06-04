<?php

namespace LoicGarde\OAuth ;

class MyClassTest extends \PHPUnit_Framework_TestCase {
    
     public function testAdd() {
         $myClass = new MyClass ;
         $a = 3 ;
         $b = 4 ;
         $c = $a + $b ;
         $this->assertEquals($c,$myClass->add($a, $b)) ; 
     } 
}

?>
