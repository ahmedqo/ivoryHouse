<?php

namespace App\Functions;

class BankFunction
{
    public static function encrypt($str, $key)
    {
        $str = BankFunction::pad($str);
        $encrypted = openssl_encrypt($str, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $key);
        $encrypted = base64_decode($encrypted);
        $encrypted = unpack('C*', ($encrypted));
        $encrypted = BankFunction::hex($encrypted);
        $encrypted = urlencode($encrypted);
        return $encrypted;
    }

    public static function decrypt($code, $key)
    {
        $code =  BankFunction::unhex(trim($code));
        $code = BankFunction::str($code);
        $iv = $key;
        $code = base64_encode($code);
        $decrypted = openssl_decrypt($code, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        return BankFunction::unpad($decrypted);
    }

    public static function pad($text)
    {
        $blocksize = 16;
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    public static function hex($byteArray)
    {
        $bin = BankFunction::str($byteArray);
        return bin2hex($bin);
    }

    public static function unpad($text)
    {
        $pad = ord($text[strlen($text) - 1]);
        if ($pad > strlen($text)) {
            return false;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
            return false;
        }
        return substr($text, 0, -1 * $pad);
    }

    public static function unhex($hexString)
    {
        $string = hex2bin($hexString);
        return unpack('C*', $string);
    }

    function str($byteArray)
    {
        $chars = array_map("chr", $byteArray);
        return join($chars);
    }
}
