<?php
include("Database_control.php");
include("Data_filter.php");
$fm=new FilterData();
$db=new Database();

if(isset($_POST['product_id_to_delete'])){
$product_id=$_POST['product_id_to_delete'];
$product_id=$fm->secure_data($product_id);
$product_id=$db->con->real_escape_string($product_id);

$sql="DELETE FROM `Temp_Cart` WHERE product_id='$product_id'";
$result=$db->DELETE($sql);
if($result){
    echo "Deleted";
}
else{
    echo "failed to delete.";
}
}
else{
    echo $_POST['product_id_to_delete'];
}
?>