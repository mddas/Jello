<?php
include("class/Data_filter.php");
include("image_upload.php");
$db=new Database();
$image=new imageToUpload();

class FormInsert{
      
    public  $db;
    public  $fm;
    public function __construct(){
        $this->db=new Database();
        $this->fm=new FilterData();
    }

    public function ReceiveData($product_name,$product_title,$main_category,$sub_category,$sub_sub_categoryname,$status,$product_price,$product_discount,$product_description,$meta_title,$meta_keyword,$product_color,$product_size,$product_second_price,$prduct_brand)
    {
        $product_name=$this->fm->secure_data($product_name);
        $product_title=$this->fm->secure_data($product_title);
        $main_category=$this->fm->secure_data($main_category);
        $sub_category=$this->fm->secure_data($sub_category);
        $sub_sub_categoryname=$this->fm->secure_data($sub_sub_categoryname);
        $status=$this->fm->secure_data($status);
        $product_price=$this->fm->secure_data($product_price);
        $product_discount=$this->fm->secure_data($product_discount);
        $product_description=$this->fm->secure_data($product_description);
        $meta_title=$this->fm->secure_data($meta_title);
        $meta_keyword=$this->fm->secure_data($meta_keyword);
        $product_color=$this->fm->secure_data($product_color);
        $product_size=$this->fm->secure_data($product_size);
        $product_second_price=$this->fm->secure_data($product_second_price);
        $prduct_brand=$this->fm->secure_data($prduct_brand);

        $product_name=$this->db->con->real_escape_string($product_name);
        $product_title=$this->db->con->real_escape_string($product_title);
        $main_category=$this->db->con->real_escape_string($main_category);
        $sub_category=$this->db->con->real_escape_string($sub_category);
        $sub_sub_categoryname=$this->db->con->real_escape_string($sub_sub_categoryname);
        $status=$this->db->con->real_escape_string($status);
        $product_price=$this->db->con->real_escape_string($product_price);
        $product_discount=$this->db->con->real_escape_string($product_discount);
        $product_description=$this->db->con->real_escape_string($product_description);
        $meta_title=$this->db->con->real_escape_string($meta_title);
        $meta_keyword=$this->db->con->real_escape_string($meta_keyword);
        $product_color=$this->db->con->real_escape_string($product_color);
        $product_size=$this->db->con->real_escape_string($product_size);
        $product_second_price=$this->db->con->real_escape_string($product_second_price);
        $prduct_brand=$this->db->con->real_escape_string($prduct_brand);
    

        if(empty($product_name)||empty($product_price)){
            echo "<script>alert('Insert Fail! , Name and price should not be empty');</script>";
            return false;
        }else{
        $sql = "INSERT INTO product_detail (product_name, product_title, product_category, product_sub_category, product_sub_sub_category, product_status, product_price, product_discount, product_description, product_brand, meta_title, meta_keyword) VALUES ('$product_name', '$product_title', '$main_category','$sub_category','$sub_sub_categoryname','$status','$product_price','$product_discount','$product_description','$prduct_brand','$meta_title','$meta_keyword');";
        $result=$this->db->INSERT($sql);
        return $result;
        }

    }
}

?>
