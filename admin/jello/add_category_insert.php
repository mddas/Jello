<?php
include("Database_control.php");
//include("Data_filter.php");
$db=new Database();
if(isset($_POST['add'])){
    //$category_name=htmlspecialchars($_POST['category_name'], ENT_QUOTES);
    $category_type=$_POST['category_type'];
    $category_name=$_POST['category_name'];
    $category_status=$_POST['category_status'];
    $category_description=$_POST['category_description'];
    $category_metatitle=$_POST['matatitle'];
    $category_metakeyword=$_POST['metakeyword'];
    if(isset($_POST['main_category'])){
       $which_maincategory=$_POST['main_category'];
    }
    if(isset($_POST['sub_category'])){
        $which_subcategory=$_POST['sub_category'];
    }
}

if($category_type=="main_category"){
//insert in main_category table
$sql="INSERT INTO `main_category`(`category_name`, `category_description`) VALUES ('','');";


}
else if($category_type=="sub_category"){
//then insert in sub_category table
}
else if($category_type=="sub_sub_category");
{
//then insert form data into sub_sub_category
}

$sql="select * from admin";
$result=$db->con->query($sql);
$data=$result->fetch_assoc();
echo $data['admin_name'];
//$db=new Database();
*/


?>