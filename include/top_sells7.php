<div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
              </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
          

        <?php 
      $sql="SELECT * from images INNER JOIN product_detail on images.product_id=product_detail.product_id ORDER BY rand();";
      $result=$db->SELECT($sql);
      if($result!=false){
      while($data=$result->fetch_assoc()){
        $image_a=$data['image_a'];
        $image_b=$data['image_b'];
        $image_c=$data['image_c'];
        $image_d=$data['image_d'];
        $product_name=$data['product_name'];
        $product_id=$data['product_id'];
        $product_price=$data['product_price'];
        ?>

          <!----here is start crousel item---->
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <div class="ps-badge"><span>New</span></div>
                <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="<?php echo $image_a;?>" style='height:350px'; alt=""><a class="ps-shoe__overlay" href="product_detail.php?pid=<?php echo $product_id;?>"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal"><img src="<?php echo $image_a;?>" alt="" style='height:50px;'><img src="<?php echo $image_b;?>" alt="" style='height:50px;'><img src="<?php echo $image_c;?>" alt="" style='height:50px;'><img src="<?php echo $image_d;?>" alt="" style='height:50px;'></div>
                  <select class="ps-rating ps-shoe__rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                </div>
                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html"><?php echo $product_name;?></a>
                  <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price">
                    <del>£220</del><?php echo $product_price;?> </span>
                </div>
              </div>
            </div>
          </div>
          <!------here is closed crousel item---->
          <?php }} ?>

        </div>
      </div>
    </div>
  </div><!----top sells-->