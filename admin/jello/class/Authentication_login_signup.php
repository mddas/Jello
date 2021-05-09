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
                   $sql="INSERT INTO customer_detail (customer_name,customer_email,customer_password) VALUES ('$user_name','$user_email','$user_password1')";
                   $insert=$this->db->INSERT($sql);
                 }
                 else{
                     echo "<script>alert('password not match..');</script>";
                 }
             }
      }

}

?>