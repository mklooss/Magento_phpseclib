<?php

require_once BP.DS.'app'.DS.'code'.DS.'community'.DS.'phpseclib'.DS.'Crypt'.DS.''. basename(__FILE__);

// check if this class is already loaded, some modules load this file wrong :(
if (!class_exists('Crypt_Base', false))
{
    class Crypt_Base
    extends \phpseclib\Crypt\Base
    {
        public function _decryptBlock($in) {
            user_error((version_compare(PHP_VERSION, '5.0.0', '>=')  ? __METHOD__ : __FUNCTION__)  . '() must extend by class ' . get_class($this), E_USER_ERROR);
        }

        public function _encryptBlock($in) {
            user_error((version_compare(PHP_VERSION, '5.0.0', '>=')  ? __METHOD__ : __FUNCTION__)  . '() must extend by class ' . get_class($this), E_USER_ERROR);
        }

        public function _setupKey() {
            user_error((version_compare(PHP_VERSION, '5.0.0', '>=')  ? __METHOD__ : __FUNCTION__)  . '() must extend by class ' . get_class($this), E_USER_ERROR);
        }

    }
}
