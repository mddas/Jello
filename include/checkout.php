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
if(isset($_GET['action']) && $_GET['action']=="addcart"){
  $temp_user_id=$_SESSION['temp_user_id'];
  $product_id=$_GET['pid'];
  $product_quantity=$_GET['quantity'];
  $product_size=$_GET['size'];
  
  $result=$send_to_cart->getData($temp_user_id,$product_id,$product_quantity,$product_size);
  echo $result."md5";
 // $sql="INSERT INTO Temp_Cart (product_id,temp_user_id) VALUES ('$Add_Pid',temp_user_id)";
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
          $sql="select * from Temp_Cart where temp_user_id='$temp_user_id'";
          $result=$db->con->query($sql);
          while($data=$result->fetch_assoc())
          {
          ?>
          <!---------product cart list open----->
            <tr>
              <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""><?php echo $temp_user_id."md";?></a></td>
              <td>$150</td>
              <td>
                <div class="form-group--number">
                  <button class="minus"><span>-</span></button>
                  <input class="form-control" type="text" value="2">
                  <button class="plus"><span>+</span></button>
                </div>
              </td>
              <td>$300</td>
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