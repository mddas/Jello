<div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
        <ul class="ps-masonry__filter">
          <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
          <li><a href="#" data-filter=".nike">Nike <sup>1</sup></a></li>
          <li><a href="#" data-filter=".adidas">Adidas <sup>1</sup></a></li>
          <li><a href="#" data-filter=".men">Men <sup>1</sup></a></li>
          <li><a href="#" data-filter=".women">Women <sup>1</sup></a></li>
          <li><a href="#" data-filter=".kids">Kids <sup>4</sup></a></li>
        </ul>
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>

      <!-----here is all product list----->
      <?php 
      $sql="select * from product_detail";
      $result=$db->con->query($sql);
      while($data=$result->fetch_assoc()){
        $product_image=$data['product_image'];
        $product_name=$data['product_name'];
        ?>




             <div class="grid-item kids">
               <div class="grid-item__content-wrapper">
                 <div class="ps-shoe mb-30">
                   <div class="ps-shoe__thumbnail">
                     <div class="ps-badge">
                       <span>New</span></div>
                     <div class="ps-badge ps-badge--sale ps-badge--2nd">
                       <span>-35%</span>
                     </div>
                     <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                     <img src="<?php echo $product_image;?>" alt="" style='height:300px;'>
                     <a class="ps-shoe__overlay" href="product-detail.html"></a>
                   </div>
                   <div class="ps-shoe__content">
                     <div class="ps-shoe__variants">
                       <div class="ps-shoe__variant normal"><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                       <select class="ps-rating ps-shoe__rating">
                         <option value="1">1</option>
                         <option value="1">2</option>
                         <option value="1">3</option>
                         <option value="1">4</option>
                         <option value="2">5</option>
                       </select>
                     </div>
                     <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $product_name; ?></a>
                       <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                         <del>£220</del> £ 120</span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <?php } ?>
            
                     <!-----product list closed-->
       
                <!---featured product closed--->

          </div><!---grid sizer closed-->


        </div>
      </div>
    </div>
  </div><!-----futured product----->