<?php
include("Database_control.php");
$db=new Database();
$main_category=$_POST['under_which_main_category'];
$sql="select * from sub_category where which_main_category='$main_category'";
//echo $sql;
$result=$db->con->query($sql);
while($data=$result->fetch_assoc()){
$sub_category=$data['sub_categoryname'];
echo '<option value="'.$sub_category.'"'.'>'.$sub_category.'</option>';
										
}
?>