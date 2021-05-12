<?php
  include("class/Database_control.php")
?>
  <?php 
  class TotaL{
      public $db;

      public function __construct(){
          $this->db=new Database();
      }

    public function TotalMenu(){
    $sql="select * from product_detail";
    $result=$this->db->SELECT($sql);
    if($result!=false){
    $total=$result->num_rows;
    return $total;
    }
    else{
      return 0;
    }
      }

      public function TotalCustomers(){
       $sql="select * from Customer_Authentication";
       $result=$this->db->SELECT($sql);
       if($result!=false){
       $totalPermanent=$result->num_rows;
       }
       else{
        $totalPermanent=0;
       }

       $sql="select * from temp_user";
       $result=$this->db->SELECT($sql);
       if($result!=false){
       $total_temp_user=$result->num->rows;
       }
       else{
         $total_temp_user=0;
       }
       $total=$totalPermanent+$total_temp_user;
       return $total;

      }   
      
      public function TotalOrders(){
        $sql="select * from Temp_Cart";
        $result=$this->db->SELECT($sql);
        if($result!=false){
        $total=$result->num_rows;
        return $total;
        }
        else{
          return 0;
        }
        
      }
      public function TotalIncome(){
        //$sql="select * from product_detail";
        //$result=$db->SELECT($sql);
        //$total=$result->num_rows;
        return "$90000";
      }

  }
  ?>