<?php
include("class/Data_filter.php");
include("class/Database_control.php");

class AddCategory{
       public $db;
    ///public $filter;
    public function __construct()
    {
        $this->db=new Database();
       //$this->filter=new FilterData();
    }
    public function FormInsert($category_type,$category_name,$category_status,$category_description,$category_metatitle,$category_metakeyword,$which_maincategory,$which_subcategory)
    {  
        $filter=new FilterData();
        $categorys_type=$filter->secure_data($category_type);
        $category_name=$filter->secure_data($category_name);
        $category_status=$filter->secure_data($category_status);
        $category_description=$filter->secure_data($category_description);
        $category_metatitle=$filter->secure_data($category_metatitle);
        $category_metakeyword=$filter->secure_data($category_metakeyword);
        $which_maincategory=$filter->secure_data($which_maincategory);
        $which_subcategory=$filter->secure_data($which_subcategory);
        $category_image="imagenull";
       
     
if($category_type=="main_category"){
//insert in main_category table
echo "main_category inserted<br>";
$sql_prepared = $this->db->con->prepare("INSERT INTO main_category (category_name, category_description, category_image) VALUES (?, ?, ?)");
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

    }

}//AddCategory class closed

?>
