<?php
include("Database_control.php");
include("Data_filter.php");
$fm=new FilterData();
$db=new Database();

if(isset($_POST['what_to_search'])){
$what_to_search=$_POST['what_to_search'];
$what_to_search=$fm->secure_data($what_to_search);
$what_to_search=$db->con->real_escape_string($what_to_search);

if(empty($what_to_search)){
   return false;
}

$sql="SELECT * FROM product_detail WHERE product_name LIKE '%$what_to_search%';";

$result=$db->SELECT($sql);
if($result!=false){
while($data=$result->fetch_assoc())
{
   echo "<li class='list-group-item' onclick='setval(this.innerText);'>".$product_name=$data['product_name']."</li>";
}
}
}

?>

