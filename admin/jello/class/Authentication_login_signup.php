<?php
include("class/Data_filter.php");
include("class/Database_control.php");

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
             if(empty($user_name)||empty($user_email)||empty($user_password1)||empty($user_password2)){
                 echo "<script>alert('Field is empty! please fill the form')</script>";
             }
             else{
                 if($user_password1==$user_password2){
                   $sql="INSERT INTO Customer_Authentication (user_name,user_email,user_password) VALUES ('$user_name','$user_email','$user_password1')";
                   $insert=$this->db->INSERT($sql);
                 }
                 else{
                     echo "<script>alert('password not match..');</script>";
                 }
             }
      }
      public function LoginData($user_email,$user_password){
          $user_email=$this->BugHunt->secure_data($user_email);
          $user_password=$this->BugHunt->secure_data($user_password);
          if(empty($user_email) || empty($user_password)){
            echo "<script>alert('Field is empty! please fill the form')</script>";
          }
          else{
              $this->LoginAuth($user_email,$user_password);
          }
      }

      public function LoginAuth($user_email,$user_password){
          $sql="SELECT * FROM Customer_Authentication where user_email='$user_email' AND user_password='$user_password'";
          $result=$this->db->SELECT($sql);
          $rows=$result->num_rows;
          if($rows>0){
            echo "<script>alert('You are Logged in sucessfully....');</script>";
          }
          else{
            echo "<script>alert('Email and Password not match');</script>";
          }
      }

}

?>