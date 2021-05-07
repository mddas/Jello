<?php
include("Database_control.php");
include("image_upload.php");
$db=new Database();
$image=new imageToUpload();

//include("Data_filter.php");

if(isset($_POST['submit'])){
    echo "subited sucessfully....";
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
    $product_color=$_POST['product_color'];
    $product_size=$_POST['product_size'];
    $product_second_price=$_POST['product_second_price'];
    $prduct_brand=$_POST['prduct_brand'];
  
    $sql = "SHOW TABLE STATUS WHERE `Name` = 'product_detail'";
    $result=$db->con->query($sql);
    $data = $result->fetch_assoc();
    $product_id = $data['Auto_increment'];
    $image_name="productimages/".$product_id;

    $product_image=$image->imgupload($image_name);
    $product_image="admin/jello/".$product_image;
    

}

$sql_prepared = $db->con->prepare("INSERT INTO product_detail (product_name, product_title, product_category, product_sub_category, product_sub_sub_category, product_status, product_price, product_discount, product_description, product_brand, meta_title, meta_keyword,product_image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$sql_prepared->bind_param("ssssssiisssss", $product_name, $product_title, $main_category,$sub_category,$sub_sub_categoryname,$status,$product_price,$product_discount,$product_description,$prduct_brand,$meta_title,$meta_keyword,$product_image);
$sql_prepared->execute();


?>
