<?php


//openssl encrypt and decrypt functions use PKCS7-Padding that is same with PKCS5-Padding:
//https://stackoverflow.com/a/20770158/4565796
//key length of DES is 8 letter
//key length of AES is 16 letter





function des_encrypt($string,$key){ 
    //return openssl_encrypt( $string , 'DES-ECB', $panelconfig['des_key'] ); 
    return openssl_encrypt( $string , 'DES-ECB' , $key ); 
}

function des_decrypt($string,$key){
    return openssl_decrypt( $string , 'DES-ECB' , $key );
}

function aes_encrypt($string,$key){ 
    //$iv = byte[] {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 };
    //$iv = "\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0\x0";
    //return base64_encode( $iv . openssl_encrypt( $string , 'AES-128-CBC', $panelconfig['aes_key'] , OPENSSL_RAW_DATA , $iv ) ); 

    return openssl_encrypt( $string , 'AES-128-ECB' , $key ) ; 

}

function aes_decrypt($string,$key){
    return openssl_decrypt( $string , 'AES-128-ECB' , $key );
}
    

