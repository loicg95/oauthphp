<?php

namespace Loicg95\OAuth ;

class UtilsTest extends \PHPUnit_Framework_TestCase {
    
     public function testUrlEncodeTilde() {
         $this->assertEquals("hello%25hola%20toto%7Eeee" ,Utils::urlencode("hello%hola toto~eee" )) ; 
     } 
     
     public function testUrlEncode() {
         $this->assertEquals("hello%25hola%20totoeee" ,Utils::urlencode("hello%hola totoeee" )) ; 
     } 
}


?>
