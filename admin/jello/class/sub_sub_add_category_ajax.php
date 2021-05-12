<?php
include("Database_control.php");
include("Data_filter.php");
$fm=new FilterData();
$db=new Database();
$main_category=$_POST['under_which_main_category'];
$main_category=$fm->secure_data($main_category);
$main_category=$db->con->real_escape_string($main_category);

$sql="select * from sub_category where which_main_category='$main_category'";
//echo $sql;
$result=$db->SELECT($sql);
if($result!=false){
while($data=$result->fetch_assoc()){
$sub_category=$data['sub_categoryname'];
echo '<option value="'.$sub_category.'"'.'>'.$sub_category.'</option>';
}						
}
else{
    echo "";
}
?>