<?php

use \Firebase\JWT\JWT;

class Auth{

    //Sha512 - www.mibus.cr
    private static $secret_key = '*P0rt@lM3d1sm@rt!!!!*';
    
    private static $encrypt = ['HS256'];
    private static $aud = null;
    private static $iat = null;
    private static $exp = 3600;



    public static function SignIn($data){
        
        $token = array(
            'data' => $data,
            'exp' => getdate()[0] + 3600,
            'iat' => getdate()[0]
        );

        return JWT::encode($token, self::$secret_key);
    }
    
     public static function Check($token)
    {
        if(empty($token))
        {
            throw new Exception("Invalid token supplied.");
        }
        
        $decode = JWT::decode(
            $token,
            self::$secret_key,
            self::$encrypt
        );
    }
    
        public static function GetData($token)
    {
        return  json_decode(json_encode(  JWT::decode(
            $token,
            self::$secret_key,
            self::$encrypt
        )->data),true);
    }
    
    private static function Aud()
    {
        $aud = '';
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $aud = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $aud = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $aud = $_SERVER['REMOTE_ADDR'];
        }
        
        $aud .= @$_SERVER['HTTP_USER_AGENT'];
        $aud .= gethostname();
        
        return sha1($aud);
    }
}

