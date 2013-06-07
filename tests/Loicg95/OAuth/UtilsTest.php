<?php

namespace Loicg95\OAuth ;

class UtilsTest extends \PHPUnit_Framework_TestCase {
    
     public function testUrlEncodeTilde() {
         $this->assertEquals("hello%25hola%20toto%7Eeee" ,Utils::urlencode("hello%hola toto~eee" )) ; 
     } 
     
     public function testUrlEncode() {
         $this->assertEquals("hello%25hola%20totoeee" ,Utils::urlencode("hello%hola totoeee" )) ; 
     } 
     
     public function testUrlEncodeArrays() {
         $arrayIn = array("hello%hola toto~eee", "hello%hola totoeee");
         $arrayExpected = array( "hello%25hola%20toto%7Eeee", "hello%25hola%20totoeee" ) ;
         $arrayOut = Utils::urlencode($arrayIn) ;
         $this->assertEquals( count($arrayExpected) , count($arrayOut)) ;
         for ($i = 1; $i < count($arrayExpected); $i++) {
             $this->assertEquals( $arrayExpected[$i], $arrayOut[$i] ) ;
         }
     }
     
     public function testNonScalarEncode() {
         $this->assertEquals("''",Utils::urlencode(NULL)) ;
     }
}


?>
