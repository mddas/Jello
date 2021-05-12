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
    $total_menu=$this->db->HowManyRows($sql);
    return $total_menu;
      }

      public function TotalCustomers(){
       $sql="select * from Customer_Authentication";
       $totalPermanent=$this->db->HowManyRows($sql);
      
       $sql="select * from temp_user";
       $total_temp_user=$this->db->HowManyRows($sql);

       $total=$totalPermanent+$total_temp_user;
       return $total;

      }   
      
      public function TotalOrders(){
        $sql="select * from Temp_Cart";
        $total_order=$this->db->HowManyRows($sql);  
        return $total_order;     
        
      }
      public function TotalIncome(){
        //$sql="select * from product_detail";
        //$result=$db->SELECT($sql);
        //$total=$result->num_rows;
        return "$90000";
      }

  }
  ?>