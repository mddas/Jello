<?php
include("Database_control.php");
$db=new Database();

//include("Data_filter.php");

if(isset($_POST['add'])){
    //$category_name=htmlspecialchars($_POST['category_name'], ENT_QUOTES);
    $category_type=$_POST['category_type'];
    $category_name=$_POST['category_name'];
    $category_status=$_POST['category_status'];
    $category_description=$_POST['category_description'];
    $category_metatitle=$_POST['matatitle'];
    $category_metakeyword=$_POST['metakeyword'];
    $category_image="image";
    if(isset($_POST['main_category'])){
       $which_maincategory=$_POST['main_category'];
      
    }
    if(isset($_POST['sub_category'])){
        $which_subcategory=$_POST['sub_category'];
   
    }
}

if($category_type=="main_category"){
//insert in main_category table
echo "main_category inserted<br>";
$sql_prepared = $db->con->prepare("INSERT INTO main_category (category_name, category_description, category_image) VALUES (?, ?, ?)");
$sql_prepared->bind_param("sss", $category_name, $category_description, $category_image);
$sql_prepared->execute();

}
else if($category_type=="sub_category"){
    echo "sub category inserted <br>";
//then insert in sub_category table
$sql_prepared = $db->con->prepare("INSERT INTO sub_category (sub_categoryname, which_main_category, sub_categorydescription, sub_catogeryimage) VALUES (?, ?, ?,?)");
$sql_prepared->bind_param("ssss", $category_name,$which_maincategory, $category_description, $category_image);
$sql_prepared->execute();
}
else if($category_type=="sub_sub_category"){
    echo "sub-sub-categorry inseeeted <br>";
    //then insert form data into sub_sub_category
    $sql_prepared = $db->con->prepare("INSERT INTO sub_sub_category (sub_sub_name,which_main_category,which_sub_category,sub_sub_description, sub_sub_image) VALUES (?,?,?,?,?)");
    $sql_prepared->bind_param("sssss", $category_name,$which_maincategory,$which_subcategory,$category_description, $category_image);
    $sql_prepared->execute();
}
else
{
   echo "not any category match";
}


/*
$sql="select * from admin";
$result=$db->con->query($sql);
$data=$result->fetch_assoc();
echo $data['admin_name'];
//$db=new Database();
*/

?>