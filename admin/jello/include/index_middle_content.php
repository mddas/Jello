<?php include("class/total_sum.php");?>
<?php 
$total=new TotaL();
$total_menu=$total->TotalMenu();
$total_customer=$total->TotalCustomers();
$total_orders=$total->TotalOrders();
$total_income=$total->TotalIncome();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content" style="margin-top: 30px;">			
          <div class="row">
              <div class="col-xxxl-3 col-md-6 col-12">
                  <div class="box box-body py-5">
                      <div class="d-flex align-items-center justify-content-between">
                          <div class="text-start">
                              <h5>Total Menu</h5>
                              <h3 class="mb-0 fw-500"><?php echo $total_menu;?></h3>
                          </div>
                          <div>
                              <div id="progressbar1" class="mx-auto w-100 position-relative"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xxxl-3 col-md-6 col-12">
                  <div class="box box-body py-5">
                      <div class="d-flex align-items-center justify-content-between">
                          <div class="text-start">
                              <h5>Total Revenue</h5>
                              <h3 class="mb-0 fw-500"><?php echo $total_income;?></h3>
                          </div>
                          <div>
                              <div id="progressbar2" class="mx-auto w-100 position-relative"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xxxl-3 col-md-6 col-12">
                  <div class="box box-body py-5">
                      <div class="d-flex align-items-center justify-content-between">
                          <div class="text-start">
                              <h5>Total orders</h5>
                              <h3 class="mb-0 fw-500"><?php echo $total_orders;?></h3>
                          </div>
                          <div>
                              <div id="progressbar3" class="mx-auto w-100 position-relative"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xxxl-3 col-md-6 col-12">
                  <div class="box box-body py-5">
                      <div class="d-flex align-items-center justify-content-between">
                          <div class="text-start">
                              <h5>Total Customers</h5>
                              <h3 class="mb-0 fw-500"><?php echo $total_customer;?></h3>
                          </div>
                          <div>
                              <div id="progressbar4" class="mx-auto w-100 position-relative"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xxxl-6 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">Trending Items</h4>
                      </div>
                      <div class="box-body">
                          <div class="d-md-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-start align-items-center mb-20 mb-md-0">
                                  <div>
                                      <p class="mb-0 fs-18 text-mute">#1</p>
                                  </div>
                                  <div class="text-start">
                                      <img src="../images/food/biryanis.jpg" class="rounded10 w-80 mx-15" alt="" />
                                  </div>
                                  <div>
                                      <h5 class="mb-0 fw-500">Biryanis Pulav</h5>
                                      <p class="mb-0">$12.00 <span class="text-success">Main Course</span></p>
                                  </div>
                              </div>
                              <div class="d-flex justify-content-md-end align-items-center">
                                  <div class="text-end mx-15">
                                      <span class="fs-50 text-success icon-Chart-line"><span class="path1"></span><span class="path2"></span></span>
                                  </div>
                                  <div class="text-start w-90">
                                      <h3 class="box-title mb-0 fw-500">158</h3>
                                      <p class="mb-0">Sales (20%)</p>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="d-md-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-start align-items-center mb-20 mb-md-0">
                                  <div>
                                      <p class="mb-0 fs-18 text-mute">#2</p>
                                  </div>
                                  <div class="text-start">
                                      <img src="../images/food/burgers.jpg" class="rounded10 w-80 mx-15" alt="" />
                                  </div>
                                  <div>
                                      <h5 class="mb-0 fw-500">Burgers</h5>
                                      <p class="mb-0">$42.00 <span class="text-success">Snakes</span></p>
                                  </div>
                              </div>
                              <div class="d-flex justify-content-md-end align-items-center">
                                  <div class="text-end mx-15">
                                      <span class="fs-50 text-primary icon-Chart-line1"><span class="path1"></span><span class="path2"></span></span>
                                  </div>
                                  <div class="text-start w-90">
                                      <h3 class="box-title mb-0 fw-500">18</h3>
                                      <p class="mb-0">Sales (-0.5%)</p>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="d-md-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-start align-items-center mb-20 mb-md-0">
                                  <div>
                                      <p class="mb-0 fs-18 text-mute">#3</p>
                                  </div>
                                  <div class="text-start">
                                      <img src="../images/food/dals.jpg" class="rounded10 w-80 mx-15" alt="" />
                                  </div>
                                  <div>
                                      <h5 class="mb-0 fw-500">Dal Palak Recipe</h5>
                                      <p class="mb-0">$60.00 <span class="text-success">Main Course</span></p>
                                  </div>
                              </div>
                              <div class="d-flex justify-content-md-end align-items-center">
                                  <div class="text-end mx-15">
                                      <span class="fs-50 text-success icon-Chart-line"><span class="path1"></span><span class="path2"></span></span>
                                  </div>
                                  <div class="text-start w-90">
                                      <h3 class="box-title mb-0 fw-500">258</h3>
                                      <p class="mb-0">Sales (15%)</p>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="d-md-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-start align-items-center mb-20 mb-md-0">
                                  <div>
                                      <p class="mb-0 fs-18 text-mute">#4</p>
                                  </div>
                                  <div class="text-start">
                                      <img src="../images/food/noodles.jpg" class="rounded10 w-80 mx-15" alt="" />
                                  </div>
                                  <div>
                                      <h5 class="mb-0 fw-500">Pan Noodles</h5>
                                      <p class="mb-0">$112.00 <span class="text-success">Staters</span></p>
                                  </div>
                              </div>
                              <div class="d-flex justify-content-md-end align-items-center">
                                  <div class="text-end mx-15">
                                      <span class="fs-50 text-primary icon-Chart-line1"><span class="path1"></span><span class="path2"></span></span>
                                  </div>
                                  <div class="text-start w-90">
                                      <h3 class="box-title mb-0 fw-500">58</h3>
                                      <p class="mb-0">Sales (-10%)</p>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="d-md-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-start align-items-center mb-20 mb-md-0">
                                  <div>
                                      <p class="mb-0 fs-18 text-mute">#5</p>
                                  </div>
                                  <div class="text-start">
                                      <img src="../images/food/main.jpg" class="rounded10 w-80 mx-15" alt="" />
                                  </div>
                                  <div>
                                      <h5 class="mb-0 fw-500">Vegetable Jalfrezi</h5>
                                      <p class="mb-0">$120.00 <span class="text-success">Main Course</span></p>
                                  </div>
                              </div>
                              <div class="d-flex justify-content-md-end align-items-center">
                                  <div class="text-end mx-15">
                                      <span class="fs-50 text-success icon-Chart-line"><span class="path1"></span><span class="path2"></span></span>
                                  </div>
                                  <div class="text-start w-90">
                                      <h3 class="box-title mb-0 fw-500">215</h3>
                                      <p class="mb-0">Sales (21%)</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xxxl-6 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title">Revenue Overview</h4>
                      </div>
                      <div class="box-body">
                          <div id="chart"></div>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="box bg-transparent no-shadow">
                      <div class="box-header pt-0 px-0">
                          <h4 class="box-title">
                              Customer Review
                          </h4>
                      </div>
                      <div class="box-body px-0">
                          <div class="review-slider owl-carousel">
                              <div class="box p-0">
                                  <div class="box-body">
                                      <div class="d-flex align-items-center">
                                          <div class="review-tx">
                                              <div class="d-flex mb-10">
                                                  <img src="../images/avatar/1.jpg" class="w-40 h-40 me-10 rounded100" alt="" />
                                                  <div>
                                                      <p class="mb-0">Johen Doe</p>
                                                      <p class="mb-0"><small class="text-mute">1 day ago</small></p>
                                                  </div>
                                              </div>
                                              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.. </p>
                                              <div class="d-flex text-warning align-items-center">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-empty"></i>
                                                  <span class="text-fade ms-10">4.5</span>
                                              </div>
                                          </div>
                                          <img src="../images/food/dish-1.png" class="dish-img" alt="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="box p-0">
                                  <div class="box-body">
                                      <div class="d-flex align-items-center">
                                          <div class="review-tx">
                                              <div class="d-flex mb-10">
                                                  <img src="../images/avatar/2.jpg" class="w-40 h-40 me-10 rounded100" alt="" />
                                                  <div>
                                                      <p class="mb-0">Mical Doe</p>
                                                      <p class="mb-0"><small class="text-mute">2 day ago</small></p>
                                                  </div>
                                              </div>
                                              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.. </p>
                                              <div class="d-flex text-warning align-items-center">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-empty"></i>
                                                  <span class="text-fade ms-10">4.5</span>
                                              </div>
                                          </div>
                                          <img src="../images/food/dish-2.png" class="dish-img" alt="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="box p-0">
                                  <div class="box-body">
                                      <div class="d-flex align-items-center">
                                          <div class="review-tx">
                                              <div class="d-flex mb-10">
                                                  <img src="../images/avatar/3.jpg" class="w-40 h-40 me-10 rounded100" alt="" />
                                                  <div>
                                                      <p class="mb-0">Stepni Doe</p>
                                                      <p class="mb-0"><small class="text-mute">3 day ago</small></p>
                                                  </div>
                                              </div>
                                              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.. </p>
                                              <div class="d-flex text-warning align-items-center">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-empty"></i>
                                                  <span class="text-fade ms-10">4.5</span>
                                              </div>
                                          </div>
                                          <img src="../images/food/dish-3.png" class="dish-img" alt="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="box p-0">
                                  <div class="box-body">
                                      <div class="d-flex align-items-center">
                                          <div class="review-tx">
                                              <div class="d-flex mb-10">
                                                  <img src="../images/avatar/4.jpg" class="w-40 h-40 me-10 rounded100" alt="" />
                                                  <div>
                                                      <p class="mb-0">Rehan Doe</p>
                                                      <p class="mb-0"><small class="text-mute">4 day ago</small></p>
                                                  </div>
                                              </div>
                                              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.. </p>
                                              <div class="d-flex text-warning align-items-center">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-empty"></i>
                                                  <span class="text-fade ms-10">4.5</span>
                                              </div>
                                          </div>
                                          <img src="../images/food/dish-4.png" class="dish-img" alt="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="box p-0">
                                  <div class="box-body">
                                      <div class="d-flex align-items-center">
                                          <div class="review-tx">
                                              <div class="d-flex mb-10">
                                                  <img src="../images/avatar/5.jpg" class="w-40 h-40 me-10 rounded100" alt="" />
                                                  <div>
                                                      <p class="mb-0">Himesh Doe</p>
                                                      <p class="mb-0"><small class="text-mute">1 day ago</small></p>
                                                  </div>
                                              </div>
                                              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.. </p>
                                              <div class="d-flex text-warning align-items-center">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-empty"></i>
                                                  <span class="text-fade ms-10">4.5</span>
                                              </div>
                                          </div>
                                          <img src="../images/food/dish-5.png" class="dish-img" alt="" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8 col-lg-6 col-12">
                  <div class="box">
                      <div class="box-body">
                          <h4 class="box-title">Hourly Order Overview</h4>
                          <div id="order-overview"></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-12">
                  <div class="box">
                      <div class="box-body">
                          <h4 class="box-title">Daily Customer Flow</h4>
                          <div id="yearly-comparison"></div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->