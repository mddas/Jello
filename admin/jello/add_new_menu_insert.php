<?php
include("Database_control.php");
$db=new Database();

//include("Data_filter.php");

if(isset($_POST['submit'])){
    //$category_name=htmlspecialchars($_POST['category_name'], ENT_QUOTES);
    $product_name=$_POST['product_name'];
    $product_title=$_POST['product_title'];
    $main_category=$_POST['main_category'];
    $sub_category=$_POST['sub_category'];
    $sub_sub_categoryname=$_POST['sub_sub_name'];
    $status=$_POST['status'];
    $product_price=$_POST['product_price'];
    $product_discount=$_POST['product_discount'];
    $product_description=$_POST['product_description'];
    $meta_title=$_POST['meta_title'];
    $meta_keyword=$_POST['meta_keyword'];
    //$product_image=$_POST['product_image'];
    $product_color=$_POST['product_color'];
    $product_size=$_POST['product_size'];
    $product_second_price=$_POST['product_second_price'];
    $prduct_brand=$_POST['prduct_brand'];
   
    $category_image="image";
    if(isset($_POST['main_category'])){
       $which_maincategory=$_POST['main_category'];
      
    }
    if(isset($_POST['sub_category'])){
        $which_subcategory=$_POST['sub_category'];
   
    }
}
