<?php 

class  imageToUpload{
   public $image_name;
    public function imgupload($image_name){
        if(isset($_FILES['product_image'])){
            
            $errors= array();
            $file_name = $_FILES['product_image']['name'];
            $file_size =$_FILES['product_image']['size'];
            $file_tmp =$_FILES['product_image']['tmp_name'];
            $file_type=$_FILES['product_image']['type'];
            //$file_ext=strtolower(end(explode('.',$_FILES['product_image']['name'])));
            $file_ext=explode('.',$file_name);
            $file_ext=end($file_ext);
            $file_ext=strtolower($file_ext);
            $target_loc=$image_name.".".$file_ext;
            //echo $target_loc;
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,$target_loc);
               return $target_loc;      
            }else{
               print_r($errors);
            }
        }
       
    }
}

?>