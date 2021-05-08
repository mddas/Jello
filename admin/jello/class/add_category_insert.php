<?php
include("class/Data_filter.php");


class AddCategory{
       public $db;
    ///public $filter;
    public function __construct()
    {
        $this->db=new Database();
        $this->filter=new FilterData();
    }
    public function FormInsert($category_type,$category_name,$category_status,$category_description,$category_metatitle,$category_metakeyword,$which_maincategory,$which_subcategory)
    {  
        if(!empty($category_name)){
        $categorys_type=$this->filter->secure_data($category_type);
        $category_name=$this->filter->secure_data($category_name);
        $category_status=$this->filter->secure_data($category_status);
        $category_description=$this->filter->secure_data($category_description);
        $category_metatitle=$this->filter->secure_data($category_metatitle);
        $category_metakeyword=$this->filter->secure_data($category_metakeyword);
        $which_maincategory=$this->filter->secure_data($which_maincategory);
        $which_subcategory=$this->filter->secure_data($which_subcategory);
        $category_image="imagenull";
        $categorys_type=$this->db->con->real_escape_string($categorys_type);
        $category_name=$this->db->con->real_escape_string($category_name);
        $category_status=$this->db->con->real_escape_string($category_status);
        $category_description=$this->db->con->real_escape_string($category_description);
        $category_metatitle=$this->db->con->real_escape_string($category_metatitle);
        $which_maincategory=$this->db->con->real_escape_string($which_maincategory);
        $which_subcategory=$this->db->con->real_escape_string($which_subcategory);
        $category_image=$this->db->con->real_escape_string($category_image);

       
     
if($category_type=="main_category"){

$sql = "INSERT INTO main_category (category_name, category_description, category_image) VALUES ('$category_name', '$category_description', '$category_image')";
$execute=$this->db->INSERT($sql);
}
else if($category_type=="sub_category"){

//then insert in sub_category table
$sql="INSERT INTO sub_category (sub_categoryname, which_main_category, sub_categorydescription, sub_catogeryimage) VALUES ('$category_name','$which_maincategory', '$category_description', '$category_image');";
$execute=$this->db->INSERT($sql);
}
else if($category_type=="sub_sub_category"){
$sql = "INSERT INTO sub_sub_category (sub_sub_name,which_main_category,which_sub_category,sub_sub_description, sub_sub_image) VALUES ('$category_name','$which_maincategory','$which_subcategory','$category_description', '$category_image');";
$execute=$this->db->INSERT($sql);
}
else
{
   echo "not any category match";
} 

    }
    else{
        echo "<script>alert('Field are Empty')</script>";
    }
}

}//AddCategory class closed

?>
