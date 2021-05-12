<?php 
if(!isset($_SESSION)){ 
session_start();
}

?>
<?php 
include("admin/jello/class/Data_filter.php"); 
include("admin/jello/class/session_cookies.php"); 
$fm=new FilterData();
?>
<?php 
if(isset($_SESSION['temp_user_id'])){
$temp_user_id=$_SESSION['temp_user_id'];
$sqlTotal="select * from Temp_Cart where temp_user_id='$temp_user_id';";
$total=$db->con->query($sqlTotal);
$total=$total->num_rows;
}
else{
  $total=0;
}
if(isset($_SESSION['user_id'])){
  $url='admin/jello/login.php';
}
else{
  $url='admin/jello/register.php';
}
?>
<div class="header--sidebar"></div>
<header class="header">
  <div class="header__top">
    <div class="container-fluid">
      <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
              <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
              <div class="header__actions"><a href="<?php echo $url ;?>">Login & Regiser</a>
                <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                    <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                    <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
                  </ul>
                </div>
                <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">English</a></li>
                    <li><a href="#">Japanese</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  <nav class="navigation">
    <div class="container-fluid">
      <div class="navigation__column left">
        <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo.png" alt=""></a></div>
      </div>
      <div class="navigation__column center">
            <ul class="main-menu menu">
              <li class="menu-item menu-item-has-children dropdown"><a href="index.html">Home</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                      <li class="menu-item"><a href="#">Homepage #2</a></li>
                      <li class="menu-item"><a href="#">Homepage #3</a></li>
                    </ul>
              </li>
              <?php 
                 
              $sql="select * from main_category";
              $main_result=$db->con->query($sql);
              while($main_data=$main_result->fetch_assoc())
              {
                $main_category=$main_data['category_name'];
              
               ?>
              <li class="menu-item menu-item-has-children has-mega-menu"><a href="#"><?php echo $main_category; ?></a>
                <div class="mega-menu">
                  <div class="mega-wrap">
                    <div class="mega-column">
                      <ul class="mega-item mega-features">
                        <li><a href="product-listing.html">NEW RELEASES</a></li>
                        <li><a href="product-listing.html">FEATURES SHOES</a></li>
                        <li><a href="product-listing.html">BEST SELLERS</a></li>
                        <li><a href="product-listing.html">NOW TRENDING</a></li>
                        <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>
                        <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>
                        <li><a href="product-listing.html">FAN GEAR</a></li>
                      </ul>
                    </div>
                    <?php 
             
             $sub_sql="select * from sub_category";
             $sub_result=$db->con->query($sub_sql);
            while($sub_data=$sub_result->fetch_assoc())
              {
                   $which_main_category=$sub_data['which_main_category'];
                   if($which_main_category==$main_category){
                   $sub_category=$sub_data['sub_categoryname'];
                   ?>
                    <div class="mega-column">
                      <h4 class="mega-heading"><?php echo $sub_category; ?></h4>
                      <ul class="mega-item">
                           <?php
              $sub_sub_sql="SELECT * FROM `sub_sub_category`;";
             $sub_sub_result=$db->con->query($sub_sub_sql);
            while($sub_sub_data=$sub_sub_result->fetch_assoc())
              {
                    
                    $in_sub_sub_which_sub_category=$sub_sub_data['which_sub_category'];
                    $in_sub_sub_which_main_category=$sub_sub_data['which_main_category'];
                   if($in_sub_sub_which_sub_category==$sub_category && $in_sub_sub_which_main_category==$which_main_category){
                   $sub_sub_category=$sub_sub_data['sub_sub_name'];
                   ?>
                        <li><a href="product-listing.html"><?php echo $sub_sub_category;?></a></li>
                     
                        <?php }} ?>
                      </ul>
                    </div>
                    <?php }} ?>
        
                    <div class="mega-column">
                      <h4 class="mega-heading">BRAND</h4>
                      <ul class="mega-item">
                        <li><a href="product-listing.html">NIKE</a></li>
                        <li><a href="product-listing.html">Adidas</a></li>
                        <li><a href="product-listing.html">Dior</a></li>
                        <li><a href="product-listing.html">B&G</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <?php } ?>
          
              <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                      <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                    </ul>
              </li>
            </ul>
      </div>
      <div class="navigation__column right">
        <form class="ps-search--header" action="do_action" method="post">
          <input class="form-control" type="text" id="search" placeholder="Search Product…" onkeyup="Search_all();">
          <button><i class="ps-icon-search"></i></button>
          <!---here is search item to show up----->
          <ul class="list-group" id="searchshow" style="position:absolute;siz:16px;color:blue;width:220px;margin-top:2px;">
          </ul>
          <!---here is search item to show up----->
       </form>
        
<!------navbar cart----->
      
        <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php echo $total;?></i></span><i class="ps-icon-shopping-cart"></i></a>
          <div class="ps-cart__listing">
            <div class="ps-cart__content">
            <!-------one item in cart----->
            <?php 
            $temp_user_id=cookies_control::GetMyCookieId();
            $temp_user_id=$fm->secure_data($temp_user_id);
            $temp_user_id=$db->con->real_escape_string($temp_user_id);
            $_SESSION['temp_user_id']=$temp_user_id;
            $sql="SELECT * from Temp_Cart INNER JOIN product_detail ON Temp_Cart.product_id=product_detail.product_id INNER JOIN images on images.product_id =product_detail.product_id WHERE Temp_Cart.temp_user_id='$temp_user_id';";
            $result=$db->con->query($sql);
            while($data = $result->fetch_assoc()) {
               ?>
              <div class="ps-cart-item"><a class="ps-cart-item__close" id="<?php echo $data['product_id'];?>"  href="#" ></a>
                <div class="ps-cart-item__thumbnail"><a href="product_detail.php?pid=<?php echo $data['product_id'];?>"></a><img src="<?php echo $data['image_a'];?>" alt=""></div>
                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="addTocart.php"><?php echo $data['product_name']; ?></a>
                  <p><span>Quantity:<i><?php echo $data['product_quantity'];?></i></span><span>Total:<i><?php echo $data['product_price'];?></i></span></p>
                </div>
              </div>
              <?php } ?>
              <!-------one item in cart closedj---->
            <!-----</div> this div is closed and modified by md due to extra div. if any problem then remove this comment.----->
            <div class="ps-cart__total">
              <p>Number of items:<span><?php echo $total;?></span></p>
              <p>Item Total:<span>£528.00</span></p>
            </div>
            <div class="ps-cart__footer"><a class="ps-btn" href="addTocart.php">Check out<i class="ps-icon-arrow-left"></i></a></div>
          </div>
        </div>
      <!------navbar cart----->  
        <div class="menu-toggle"><span></span></div>
      </div>
    </div>
  </nav>
</header><!-----navbar-->