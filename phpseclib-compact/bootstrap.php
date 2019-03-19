<?php

$originFile = BP . DS . 'lib' . DS . 'phpseclib/bootstrap.php';
$originExists = false;
if (file_exists($originFile))
{
    $originExists = true;
}

if (!defined('MAGENTO_PHPSECLIB')) {
    if ($originExists)
    {
        define('MAGENTO_PHPSECLIB', true);
    } else {
        define('MAGENTO_PHPSECLIB', false);
    }
}

if (!MAGENTO_PHPSECLIB) {
    if (!defined('PHPSECLIB_VERSION'))
    {
        define('PHPSECLIB_VERSION', '2.0.15');
    }
} else {
    if (!defined('BP'))
    {
        throw new Exception('BP is not set');
    }
    require_once $originFile;
}

if (!MAGENTO_PHPSECLIB)
{
    /**
     * Bootstrapping File for phpseclib
     *
     * @license http://www.opensource.org/licenses/mit-license.html MIT License
     */
    if (extension_loaded('mbstring')) {
        // 2 - MB_OVERLOAD_STRING
        if (ini_get('mbstring.func_overload') & 2) {
            throw new \UnexpectedValueException(
                'Overloading of string functions using mbstring.func_overload ' .
                'is not supported by phpseclib.'
            );
        }
    }
    spl_autoload_register(function($className) {
        $path = explode('\\', $className);
        if (array_shift($path) == 'phpseclib') {
            return include str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        }
    });
}