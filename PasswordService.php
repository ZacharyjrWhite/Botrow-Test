<?php

class PasswordService {

    private $pwSalt;
    private $config;

    public function __construct() {
        $this->config = require('global_configs.php');
        $pwSalt = $this->config['pwSalt'];
    }

    function __destruct() {  }

    public function getEncryptedPassword($password) {
        return $this->encryptPass($password);
    }

    public function getDecryptedPassword($hashkey){
        return $this->decryptPass($hashkey);
    }

    private function encryptPass($password) {
        $sSalt = $this->pwSalt;
        $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
        $method = 'aes-256-cbc';
    
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) 
        . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
    
        $encrypted = base64_encode(openssl_encrypt($password, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
        return $encrypted;
    }
 
    function decryptPass($password) {
        $sSalt = $this->pwSalt;
        $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
        $method = 'aes-256-cbc';

        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) 
        . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        $decrypted = openssl_decrypt(base64_decode($password), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
        return $decrypted;
    }
}

?>