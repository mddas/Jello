<?php 
if(!isset($_SESSION)){ 
session_start();
}
?>

<?php
include("admin/jello/class/cart_manage.php"); 
$send_to_cart=new cart_manage();

$fm=new FilterData();
$db=new Database();
//check user login 
//check cookies 
//check data on session
?>
<?php
if(isset($_SESSION['publish']) && $_SESSION['publish']==true){
if(isset($_GET['action']) && $_GET['action']=="addcart"){
  $temp_user_id=$_SESSION['temp_user_id'];
  $product_id=$_GET['pid'];
  $product_quantity=$_GET['quantity'];
  $product_size=$_GET['size'];
  
  $result=$send_to_cart->getData($temp_user_id,$product_id,$product_quantity,$product_size);
 // $sql="INSERT INTO Temp_Cart (product_id,temp_user_id) VALUES ('$Add_Pid',temp_user_id)";
 $_SESSION['publish']=false;
}
}

?>

<div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table">
          <thead>
            <tr>
              <th>All Products</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
          $temp_user_id=Session_Cookies::get("temp_user_id");
          $sql="SELECT * from Temp_Cart INNER JOIN product_detail ON Temp_Cart.product_id=product_detail.product_id INNER JOIN images on images.product_id =product_detail.product_id WHERE Temp_Cart.temp_user_id='$temp_user_id';";
        
          $result=$db->con->query($sql);
          while($data=$result->fetch_assoc())
          {
            $product_name=$data['product_name'];
            $product_price=$data['product_price'];
            $product_image=$data['image_a'];
            $product_quantity=$data['product_quantity']
          ?>
          <!---------product cart list open----->
            <tr>
              <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="<?php echo $product_image;?>" style="width:150px;height:150px;" alt=""><?php echo $product_name;?></a></td>
              <td><?php echo "$".$product_price; ?></td>
              <td>
                <div class="form-group--number">
                  <button class="minus"><span>-</span></button>
                  <input class="form-control" type="text" value="<?php echo $product_quantity;?>">
                  <button class="plus"><span>+</span></button>
                </div>
              </td>
              <td><?php echo $product_price*$product_quantity;?></td>
              <td>
                <div class="ps-remove"></div>
              </td>
            </tr>
            <?php } ?>
          <!-----------product cart list close--------->
        
          </tbody>
        </table>
        <div class="ps-cart__actions">
          <div class="ps-cart__promotion">
            <div class="form-group">
              <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                <input class="form-control" type="text" placeholder="Promo Code">
              </div>
            </div>
            <div class="form-group">
              <button class="ps-btn ps-btn--gray">Continue Shopping</button>
            </div>
          </div>
          <div class="ps-cart__total">
            <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div><!----checkout cart----->