﻿<?php
include("class/session_cookies.php");
Session_Cookies::checksession();
?>
<?php include("include/header.html"); ?>
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
<div class="wrapper">

<?php 
include("include/navbar.php");
include("include/left_navbar.html");
include("include/index_middle_content.html");///this is middle part of page i.e content wrapper
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
