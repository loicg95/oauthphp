<?php

namespace Loicg95\OAuth ;

class UtilsTest extends \PHPUnit_Framework_TestCase {
    
     public function testUrlEncode() {
         $this->assertEquals("hello%25hola%20toto%7Eeee" ,Utils::urlencode("hello%hola toto~eee" )) ; 
     } 
}


?>
