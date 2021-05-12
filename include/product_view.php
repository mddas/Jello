<?php 
if(!isset($_SESSION)){ 
session_start();
}

?>
<?php 
$fm=new FilterData();
$db=new Database(); 
?> 

<?php 
if(isset($_GET["pid"])){
  $product_id=$_GET["pid"];
  $product_id=$fm->secure_data($product_id);
  $product_id=$db->con->real_escape_string($product_id);
  $sql="SELECT * from images INNER JOIN product_detail on images.product_id=product_detail.product_id WHERE product_detail.product_id='$product_id';";
  $result=$db->SELECT($sql);
  $data=$result->fetch_assoc();
  $image_a=$data['image_a'];
  $image_b=$data['image_b'];
  $image_c=$data['image_c'];
  $image_d=$data['image_d'];
  $product_name=$data['product_name'];
  $_SESSION["publish"]=true;
  }
if(isset($_GET["show"])){
  $show=$_GET['show'];
  $temp=$image_a;
  if($show=="b"){
    $image_a=$image_b;
    $image_b=$temp;
     }
     else if($show=="c"){
        $image_a=$image_c;
        $image_c=$temp;
     }
     else if($show=="d"){
       $image_a=$image_d;
       $image_d=$temp;
     }

  }



?>
      <!----------this is  Add to Cart overview,comment,review-->
      <div class="ps-product--detail pt-60">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-10 col-md-12 col-lg-offset-1">
              <div class="ps-product__thumbnail">
                <div class="ps-product__preview">
                  <div class="ps-product__variants">
                    <div class="item"><img src="<?php echo $image_a;?>" alt=""></div>
                    <div class="item"><img src="<?php echo $image_b;?>" alt=""></div>
                    <div class="item"><img src="<?php echo $image_c;?>" alt=""></div>
                    <div class="item"><img src="<?php echo $image_d;?>" alt=""></div>
                    <div class="item"><img src="<?php echo $image_a;?>" alt=""></div>
                  </div><a class="popup-youtube ps-product__video" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="<?php echo $image_a;?>" alt=""><i class="fa fa-play"></i></a>
                </div>
                <div class="ps-product__image">
                  <div class="item"><img class="zoom" src="<?php echo $image_a;?>" alt="" data-zoom-image="<?php echo $image_a;?>"></div>
                  <div class="item"><img class="zoom" src="<?php echo $image_b;?>" alt="" data-zoom-image="<?php echo $image_b;?>"></div>
                  <div class="item"><img class="zoom" src="<?php echo $image_c;?>" alt="" data-zoom-image="<?php echo $image_c;?>"></div>
                </div>
              </div>
              <div class="ps-product__thumbnail--mobile">
                <div class="ps-product__main-img"><img src="<?php echo $image_a;?>" alt=""></div>
                <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg" alt=""><img src="images/shoe-detail/3.jpg" alt=""></div>
              </div>
              <div class="ps-product__info">
                <div class="ps-product__rating">
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select><a href="#">(Read all 8 reviews)</a>
                </div>
                <h1>Air strong  training</h1>
                <p class="ps-product__category"><a href="#"> Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
                <h3 class="ps-product__price">£ 115 <del>£ 330</del></h3>
                <div class="ps-product__block ps-product__quickview">
                  <h4>QUICK REVIEW</h4>
                  <p>The Nike Free RN 2017 Men's Running Sky weighs less than previous versions and features an updated knit material…</p>
                </div>
                <div class="ps-product__block ps-product__style">
                  <h4>CHOOSE YOUR STYLE</h4>
                  <ul>
                    <li><a href="?pid=<?php echo $product_id;?>&&show=a"><img src="<?php echo $image_a;?>" style="height:100px;width:100px;" alt=""></a></li>
                    <li><a href="?pid=<?php echo $product_id;?>&&show=b"><img src="<?php echo $image_b;?>" style="height:100px;width:100px;" alt=""></a></li>
                    <li><a href="?pid=<?php echo $product_id;?>&&show=c"><img src="<?php echo $image_c;?>" style="height:100px;width:100px;" alt=""></a></li>
                    <li><a href="?pid=<?php echo $product_id;?>&&show=d"><img src="<?php echo $image_d;?>" style="height:100px;width:100px;" alt=""></a></li>
                  </ul>
                </div>
                <div class="ps-product__block ps-product__size">
                  <h4>CHOOSE SIZE<a href="#">Size chart</a></h4>
                  <select class="ps-select selectpicker" id="size">
                    <option value="1">Select Size</option>
                    <option value="2">4</option>
                    <option value="3">4.5</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                    <option value="3">6.5</option>
                    <option value="3">7</option>
                    <option value="3">7.5</option>
                    <option value="3">8</option>
                    <option value="3">8.5</option>
                    <option value="3">9</option>
                    <option value="3">9.5</option>
                    <option value="3">10</option>
                  </select>
                  <div class="form-group">
                    <input class="form-control" type="number" value="1" id="quantity">
                  </div>
                </div>
                <div class="ps-product__shopping"><a class="ps-btn mb-10" onclick="submitcart();">Add to cart<i class="ps-icon-next"></i></a>
                  <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
                  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
                  <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                  <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                  <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_02">
                  <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                  <div class="ps-review">
                    <div class="ps-review__thumbnail"><img src="<?php echo $image_a;?>" alt=""></div>
                    <div class="ps-review__content">
                      <header>
                        <select class="ps-rating">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="5">5</option>
                        </select>
                        <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                      </header>
                      <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                    </div>
                  </div>
                  <form class="ps-product__review" action="_action" method="post">
                    <h4>ADD YOUR REVIEW</h4>
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Name:<span>*</span></label>
                              <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                              <label>Email:<span>*</span></label>
                              <input class="form-control" type="email" placeholder="">
                            </div>
                            <div class="form-group">
                              <label>Your rating<span></span></label>
                              <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <label>Your Review:</label>
                              <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                              <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                            </div>
                          </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_03">
                  <p>Add your tag <span> *</span></p>
                  <form class="ps-product__tags" action="_action" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="">
                      <button class="ps-btn ps-btn--sm">Add Tags</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_04">
                  <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                  </div>
                  <div class="form-group">
                    <button class="ps-btn" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!----------this is Add  to Cart overview,comment,review-->
      <script>
        function submitcart(){
          var size=document.getElementById("size").value;
          var quantity=document.getElementById("quantity").value;
          var pid=<?php echo $product_id;?>;

          url="addTocart.php?"+"action=addcart"+"&&pid="+pid+"&&size="+size+"&&quantity="+quantity;
          window.location.href = url;
        }
      </script>