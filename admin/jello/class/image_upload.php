
<?php 
//in imgupload 2 argument one is image name with image location and second argument is image post name
class  imageToUpload{
   public $image_name;
    public function imgupload($image_name,$post_name){
        if(isset($_FILES[$post_name])){
            
            $errors= array();
            $file_name = $_FILES[$post_name]['name'];
            $file_size =$_FILES[$post_name]['size'];
            $file_tmp =$_FILES[$post_name]['tmp_name'];
            $file_type=$_FILES[$post_name]['type'];
            //$file_ext=strtolower(end(explode('.',$_FILES[$post_name]['name'])));
            $file_ext=explode('.',$file_name);
            $file_ext=end($file_ext);
            $file_ext=strtolower($file_ext);
            $target_loc=$image_name.".".$file_ext;
            //echo $target_loc;
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 20097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,$target_loc);
               return $target_loc;      
            }else{
               //print_r($errors);
            }
        }
       
    }
}

?>