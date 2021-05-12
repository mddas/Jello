<?php
//include("class/Database_control.php");
include("Database_control.php");
?>

<?php
class cookies_control{

    public static function set($cookie_name,$cookie_value){
        
        setcookie($cookie_name, $cookie_value, time() + (8688400 * 55), "/"); // 86400 = 1 day
        return $cookie_value;
    }

    public static function get($cookie_name){
       
        return  $_COOKIE[$cookie_name];
    
    }

    public static function GetMyCookieId(){

        if(!isset($_COOKIE["temp_user_id"])) {
            
           return self::Entry_new_user();

       } else {

            return $_COOKIE["temp_user_id"];
       }

    }

    public static function Entry_new_user(){
           $db=new Database();
           $sql="INSERT INTO temp_user (cookies_user_id) VALUES (NULL);";
           $result=$db->con->query($sql);
           if($result==1){
               $temp_user_id= $db->con->insert_id;
               return self::set("temp_user_id",$temp_user_id);
           }
           else{
               
            return $db->con->error;
           }   
        
        }

    



}

?>