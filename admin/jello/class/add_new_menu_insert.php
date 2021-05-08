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

    public function ReceiveData($product_name,$product_title,$main_category,$sub_category,$sub_sub_categoryname,$status,$product_price,$product_discount,$product_description,$meta_title,$meta_keyword,$product_color,$product_size,$product_second_price,$prduct_brand,$product_image)
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
        $product_image=$this->fm->secure_data($product_image);




        $sql = "INSERT INTO product_detail (product_name, product_title, product_category, product_sub_category, product_sub_sub_category, product_status, product_price, product_discount, product_description, product_brand, meta_title, meta_keyword,product_image) VALUES ('$product_name', '$product_title', '$main_category','$sub_category','$sub_sub_categoryname','$status','$product_price','$product_discount','$product_description','$prduct_brand','$meta_title','$meta_keyword','$product_image');";
        $this->db->INSERT($sql);

    }
}

?>
