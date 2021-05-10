<?php
 include("class/Database_control.php"); 
?>
<?php include("include/header.html"); ?>
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
<div class="wrapper">

<?php 
include("include/navbar.php");
include("include/left_navbar.html");
include("include/add_category.php");
include("include/right_navbar.html");
include("include/footer.html");
include("include/control_sidebar.html");

?>
</div> <!----wrapper closed----->

<?php
include("include/chat_popup_box.html"); 
include("include/javascript.html"); ?>

</body>	
</html>
