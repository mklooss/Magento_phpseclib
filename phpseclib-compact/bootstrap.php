<?php

$dir = null;
if (!defined('MAGENTO_PHPSECLIB')) {
    if (version_compare(Mage::getVersion(), '1.9.4.0') >= 0)
    {
        define('MAGENTO_PHPSECLIB', true);
    } else {
        define('MAGENTO_PHPSECLIB', false);
    }
}

if (!MAGENTO_PHPSECLIB) {
    if (!defined('PHPSECLIB_VERSION'))
    {
        define('PHPSECLIB_VERSION', '2.0.13');
        $dir = 'phpseclib-' . PHPSECLIB_VERSION;
    }
} else {
    if (!defined('BP'))
    {
        throw new Exception('BP is not set');
    }
    $dir = BP . DS . 'lib' . DS . 'phpseclib';
    require_once $dir . '/bootstrap.php';
}

require_once $dir . '/Math/BigInteger.php';
require_once $dir . '/Crypt/Base.php';
require_once $dir . '/Crypt/DES.php';
require_once $dir . '/Crypt/RC2.php';
require_once $dir . '/Crypt/TripleDES.php';
require_once $dir . '/Crypt/Blowfish.php';
require_once $dir . '/Crypt/Random.php';
require_once $dir . '/Crypt/Hash.php';
require_once $dir . '/Crypt/Rijndael.php';
require_once $dir . '/Crypt/RC4.php';
require_once $dir . '/Crypt/RSA.php';
require_once $dir . '/Crypt/Twofish.php';
require_once $dir . '/Crypt/AES.php';
require_once $dir . '/File/X509.php';
require_once $dir . '/File/ASN1/Element.php';
require_once $dir . '/File/ANSI.php';
require_once $dir . '/File/ASN1.php';
require_once $dir . '/System/SSH/Agent/Identity.php';
require_once $dir . '/System/SSH/Agent.php';
require_once $dir . '/Net/SCP.php';
require_once $dir . '/Net/SSH1.php';
require_once $dir . '/Net/SSH2.php';
require_once $dir . '/Net/SFTP.php';
require_once $dir . '/Net/SFTP/Stream.php';