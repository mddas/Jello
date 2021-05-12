document.getElementById('main_category').style.display="none";
document.getElementById('sub_category').style.display="none"

function findcategory(value){
   if(value=="main_category"){
       //hide all sub category
       document.getElementById("main_category").style.display="none"; 
       document.getElementById('sub_category').style.display="none";

   }
   else if(value=="sub_category"){
       //if you select sub_category then
       //choose under which main category belongs to this sub category
       //display only main category
       document.getElementById("main_category").style.display="block"; 
       document.getElementById('sub_category').style.display="none";

   }
   else{
       //if you select sub_sub_category then
       //choose under which main category belongs to this sub_sub_category and also choose which sub_category
       //display sub_sub_category
       //display main_category
       document.getElementById("main_category").style.display="block"; 
       document.getElementById('sub_category').style.display="block";

    }
}
function sendToajax(value){
 
    $.ajax({  
        type: "POST",  
        url: "class/sub_sub_add_category_ajax.php", 
        data: "under_which_main_category="+ value,
        success:function (data) {
                          
            $('#sub-sub').html(data);
        }
    });
}

