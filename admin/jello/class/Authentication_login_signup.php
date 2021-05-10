<?php
include("class/Data_filter.php");
include("class/Database_control.php");
include("class/session_cookies.php");
?>

<?php
class Authentication_login_signup{

      public $BugHunt;
      public $db;
      public function __construct(){
          $this->BugHunt=new FilterData();
          $this->db=new Database();
      }

      public function RegisterData($user_name,$user_email,$user_password1,$user_password2){
             $user_name=$this->BugHunt->secure_data($user_name);
             $user_email=$this->BugHunt->secure_data($user_email);
             $user_password1=$this->BugHunt->secure_data($user_password1);
             $user_password2=$this->BugHunt->secure_data($user_password2);

             $user_name=$this->db->con->real_escape_string($user_name);
             $user_email=$this->db->con->real_escape_string($user_email);
             $user_password1=$this->db->con->real_escape_string($user_password1);
             $user_password2=$this->db->con->real_escape_string($user_password2);

             if(empty($user_name)||empty($user_email)||empty($user_password1)||empty($user_password2)){
                 return "Field is empty! please fill the form </script>";
             }
             else{
                 if($user_password1==$user_password2){
                   $sql="INSERT INTO Customer_Authentication (user_name,user_email,user_password) VALUES ('$user_name','$user_email','$user_password1')";
                   $result=$this->db->INSERT($sql);
                   return $result;
                   
                 }
                 else{
                     return "Re-Type password not match";
                 }
             }
      }
      public function LoginData($user_email,$user_password){
          $user_email=$this->BugHunt->secure_data($user_email);
          $user_password=$this->BugHunt->secure_data($user_password);

          $user_email=$this->db->con->real_escape_string($user_email);
          $user_password=$this->db->con->real_escape_string($user_password);

          if(empty($user_email) || empty($user_password)){
            return  "Field is empty! please fill the form";
          }
          else{
              return $this->LoginAuth($user_email,$user_password);
          }
      }

      public function LoginAuth($user_email,$user_password){
          $sql="SELECT * FROM Customer_Authentication where user_email='$user_email' AND user_password='$user_password'";
          $result=$this->db->SELECT($sql);
          if($result!=false){
            $data=$result->fetch_assoc();
            $user_id=$data['user_id'];
            $user_name=$data['user_name'];
            Session_Cookies::set("user_login","2");
            Session_Cookies::set("user_id",$user_id);
            Session_Cookies::set("user_name",$user_name);
            //Session_Cookies::set("user_email",$user_email);
            return Session_Cookies::checklogin();
          }
          else if($result==false){
            return "wrong email or password";
          }
      }

}

?>