<?php
 if(isset($_GET['logout'])) {
   session_start();
   session_destroy();


   $logout = "login.php";        

   header("Location: $logout");
   exit();
 }
?> 