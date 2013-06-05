<?php

namespace Loicg95\OAuth ;

class Utils {

  public static function urlencode($input) {
    if (is_array($input)) {
        return array_map(array('Loicg95\OAuth\Utils', 'urlencode'), $input);
    } else if (is_scalar($input)) {
        return str_replace('%7E', '~', rawurlencode($input));
    } else {
        return '';
    }
 }
}
   

?>
