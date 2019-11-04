<?php

require_once BP.DS.'app'.DS.'code'.DS.'community'.DS.'phpseclib'.DS.'Crypt'.DS.''. basename(__FILE__);

// check if this class is already loaded, some modules load this file wrong :(
if (!class_exists('Crypt_Base', false))
{
    class Crypt_Base
    extends \phpseclib\Crypt\Base
    {
    }
}
