  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Add/Edit Menu</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Menu</li>
								<li class="breadcrumb-item active" aria-current="page">Add/Edit</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<form action="add_new_menu_insert.php" method="POST" enctype="multipart/form-data">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Product Name</label>
									  <input type="text" class="form-control" placeholder="Product Name" name="product_name">
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
									   <label class="fw-700 fs-16 form-label">Title</label>
									   <input type="text" class="form-control" placeholder="product title" name="product_title">
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Main Category</label>
										<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="main_category">
											<?php  
											$sql="select * from main_category";
										  $result=$db->con->query($sql);
										  while($data=$result->fetch_assoc()){
											  $main_category=$data['category_name'];
										  ?>
										  <option value="men"><?php echo $main_category ; ?></option>
										  <?php } ?>
										</select>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Sub Category</label>
										<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="sub_category">
										<?php  
											$sql="select * from sub_category";
										  $result=$db->con->query($sql);
										  while($data=$result->fetch_assoc()){
											  $sub_categoryname=$data['sub_categoryname'];
										  ?>
										  <option value="men"><?php echo $sub_categoryname ; ?></option>
										  <?php } ?>
										</select>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="fw-700 fs-16 form-label">Sub Sub Category</label>
											<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="sub_sub_name">
											<?php  
											$sql="select * from sub_sub_category";
										  $result=$db->con->query($sql);
										  while($data=$result->fetch_assoc()){
											  $sub_sub_name=$data['sub_sub_name'];
										  ?>
										  <option value="men"><?php echo $sub_sub_name ; ?></option>
										  <?php } ?>
											</select>
										</div>
									</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="fw-700 fs-16 form-label">Status</label>
									<div class="radio-list">
										<label class="radio-inline p-0 me-10">
											<div class="radio radio-info">
												<input type="radio" name="status" id="radio1" value="option1">
												<label for="radio1">Published</label>
											</div>
										</label>
										<label class="radio-inline">
											<div class="radio radio-info">
												<input type="radio" name="status" id="radio2" value="option2">
												<label for="radio2">Draft</label>
											</div>
										</label>
									</div>
								</div>
							</div>
							<!--/span-->
								</div>
								<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Price</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-money"></i></div>
											<input type="text" class="form-control" placeholder="270" name="product_price"> </div>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Discount</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-cut"></i></div>
											<input type="text" class="form-control" placeholder="50%" name="product_discount"> </div>
									</div>
								</div>
								<!--/span-->
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Product Description</label>
										<textarea class="form-control p-20" rows="4" name="product_description">Product Description</textarea>
									</div>
								</div>
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Meta Title</label>
										<input type="text" class="form-control" name="meta_title"> </div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Meta Keyword</label>
										<input type="text" class="form-control" name="meta_keyword"> </div>
								</div>
								<!--/span-->
								<div class="col-md-3">
									<h4 class="box-title mt-20">Upload Image</h4>
									<div class="product-img text-start">
									
										<img id="imgshow" alt="" class="mb-15">
									
									
										<div class="btn btn-info mb-20">
                                            <input type="file" class="upload" name="product_image" onchange="document.getElementById('imgshow').src = window.URL.createObjectURL(this.files[0])"> 
										</div>
									
									</div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-12">
									<h4 class="box-title mt-40">General Info</h4>
									<div class="table-responsive">
										<table class="table no-border td-padding">
											<tbody>
												<tr>
													<td class="ps-0">
														<input type="text" class="form-control" placeholder="Product color" name="product_color">
													</td>
													<td class="ps-0">
														<input type="text" class="form-control" placeholder="product Size" name="product_size">
													</td>
												</tr>
												<tr>
													<td class="ps-0">
														<div class="input-group">
															<div class="input-group-addon"><i class="ti-money"></i></div>
															<input type="text" class="form-control" placeholder="Second Price" name="product_second_price"> </div>
													</td>
													<td class="ps-0">
														<input type="text" class="form-control" placeholder="product brand" name="prduct_brand">
													</td>
												</tr>
											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary" name="submit"> <i class="fa fa-check"></i> Save / Add</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				  </div>
				</div>
			  </div>		  
		  </div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->