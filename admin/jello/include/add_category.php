<?php 
 include("class/add_category_insert.php");

 $db=new Database();
 $send=new AddCategory();
 
  ?>
 
<?php

  if(isset($_POST['add'])){
    //$category_name=htmlspecialchars($_POST['category_name'], ENT_QUOTES);
    $category_type=$_POST['category_type'];
    $category_name=$_POST['category_name'];
    $category_status=$_POST['category_status'];
    $category_description=$_POST['category_description'];
    $category_metatitle=$_POST['matatitle'];
    $category_metakeyword=$_POST['metakeyword'];
	$which_maincategory="";
	$which_subcategory="";
    if(isset($_POST['main_category'])){
       $which_maincategory=$_POST['main_category'];
      
    }
    if(isset($_POST['sub_category'])){
        $which_subcategory=$_POST['sub_category'];
   
    }
	$send->FormInsert($category_type,$category_name,$category_status,$category_description,$category_metatitle,$category_metakeyword,$which_maincategory,$which_subcategory);

}


?>

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
		<!------add categpry---->
		<section class="content">
			<div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<form action="" method="POST">
						<div class="form-body">
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Category</label>
										<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="category_type" onchange="findcategory(this.value)">
											<option value="main_category">Main Category</option>
											<?php 
                                                 $sql="select * from main_category";
												 $result=$db->con->query($sql);
												 $count=$result->num_rows;
												 if($count>0){
													 ?>
											<option value="sub_category">Sub Category</option>
											<?php 
                                                 $sql="select * from sub_category";
												 $result=$db->con->query($sql);
												 $count=$result->num_rows;
												 if($count>0){
													 ?>
											<option value="sub_sub_category">Sub Sub-Category</option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<!--/span-->
								
								<!--/span-->
							</div>
							<!--/row-->

							<!--/row-->
							<div class="row">
								<div class="col-md-6" id="main_category">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Under Main Category</label>
										<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="main_category" onchange="sendToajax(this.value)">
											<?php  
								      		$sql="select * from main_category";
											$result=$db->con->query($sql);
											while($data=$result->fetch_assoc()){
												$main_category=$data['category_name'];
											?>
											<option value="<?php echo $main_category ; ?>"><?php echo $main_category ; ?></option>
											<?php } ?>
					
										</select>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6" id="sub_category">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Under Sub Category</label>
										<select class="form-select" data-placeholder="Choose a Category" tabindex="1" name="sub_category" id="sub-sub">
										
										</select>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Category Name</label>
									  <input type="text" class="form-control" placeholder="Category Name" name="category_name">
									</div>
								</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="fw-700 fs-16 form-label">Status</label>
											<div class="radio-list">
												<label class="radio-inline p-0 me-10">
													<div class="radio radio-info">
														<input type="radio" name="category_status" id="radio1" value="published">
														<label for="radio1">Published</label>
													</div>
												</label>
												<label class="radio-inline">
													<div class="radio radio-info">
														<input type="radio" name="category_status" id="radio2" value="draft">
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
								<div class="col-md-12">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Ingredients and Description</label>
										<textarea class="form-control p-20" rows="4" name="category_description">Description of Category</textarea>
									</div>
								</div>
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Meta Title</label>
										<input type="text" class="form-control" name="matatitle"> </div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Meta Keyword</label>
										<input type="text" class="form-control" name="metakeyword"> </div>
								</div>
								<!--/span-->
								<div class="col-md-3">
									<h4 class="box-title mt-20">Uploaded Image</h4>
									<div class="product-img text-start">
										<!---
										<img src="../images/product/product-9.png" alt="" class="mb-15">
										<p>Upload Anonther Image</p>
										------>
										<div class="btn btn-info mb-20">
                                            <input type="file" class="upload" name="image"> 
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary" name="add"> <i class="fa fa-check"></i> Save/Add</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				  </div>
				</div>
			  </div>		  
		  </div>
		</section>
		<!------end add categpry---->
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->