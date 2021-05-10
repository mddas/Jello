<?php

class Session_Cookies{

     public static function init(){
         session_start();
     }

     public static function set($key,$val){
         self::init();
        $_SESSION[$key]=$val;
    
     }

     public static function get($key){
         if(isset($_SESSION[$key])){
             return $_SESSION[$key];
         }
         else{
             return false;
         }
     }

     public static function destroy(){
         self::init();
         session_destroy();
         header("Location:login.php");
     }

     public static function checklogin(){
         self::init();
         if(self::get("user_login")==true){
            header("Location:index.php");
         }
         else{
             header("Location:login.php");
         }
     }

   public static function checksession(){
       self::init();
         if(self::get("user_login")!=true){
             header("Location:login.php");
         }
        }
     

   


}




?>