<?php 


$type   = $_POST['type'];
$string   = $_POST['string'];
$key    = $_POST['key'];


if($type == "des_e"){

    $ret = openssl_encrypt( $string , 'DES-ECB' , $key );
    if(false === $ret){ echo "error" . openssl_error_string(); exit; } else { echo $ret; exit; }

}else if($type == "des_d"){

    $ret = openssl_decrypt( $string , 'DES-ECB' , $key );
    if(false === $ret){ echo "error" . openssl_error_string(); exit; } else { echo $ret; exit; }

}else if($type == "aes_e"){

    $ret = openssl_encrypt( $string , 'AES-128-ECB' , $key ) ; 
    if(false === $ret){ echo "error" . openssl_error_string(); exit; } else { echo $ret; exit; }

}else if($type == "aes_d"){

    $ret = openssl_decrypt( $string , 'AES-128-ECB' , $key ) ; 
    if(false === $ret){ echo "error" . openssl_error_string(); exit; } else { echo $ret; exit; }

}else if($type == "base64_d"){

    $ret =  base64_decode($string); 
    if(false === $ret){ echo "error"; exit; } else { echo $ret; exit; }


}else if($type == "base64_e"){

    $ret =  base64_encode($string); 
    if(false === $ret){ echo "error"; exit; } else { echo $ret; exit; }

}else{
    echo "wrong type";
}

   

?>