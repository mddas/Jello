<?php 

class cart_manage{
    
    public $db;
    public $fm;

    public function __construct(){
        $this->db=new Database();
        $this->fm=new FilterData();
    }
    
    public function getData($temp_user_id,$product_id,$product_quantity,$product_size){

        $temp_user_id=$this->fm->secure_data($temp_user_id);
        $product_id=$this->fm->secure_data($product_id);
        $product_quantity=$this->fm->secure_data($product_quantity);
        $product_size=$this->fm->secure_data($product_size);

        $temp_user_id=$this->db->con->real_escape_string($temp_user_id);
        $product_id=$this->db->con->real_escape_string($product_id);
        $product_quantity=$this->db->con->real_escape_string($product_quantity);
        $product_size=$this->db->con->real_escape_string($product_size);
        
        return $this->insert_data($temp_user_id,$product_id,$product_quantity,$product_size);
    }

    public function insert_data($temp_user_id,$product_id,$product_quantity,$product_size){
        
        $sql="INSERT INTO Temp_Cart (temp_user_id,product_id,product_quantity,product_size) VALUES ('$temp_user_id','$product_id','$product_quantity','$product_size')";
        $result=$this->db->INSERT($sql);
        return $result;
        //echo "<script>alert('". $result."');</script>";
     }


}

?>