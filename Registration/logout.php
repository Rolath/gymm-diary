<?php
 if(isset($_GET['logout'])) {
   session_start();
   session_destroy();


   $logout = "login.php";        

   header("Location: $logout");
   exit();
 }
 echo 'Are you sure you want to logout?' . "\n";
 echo '<p>' . "\n;
 echo '    <a href="' . $_SERVER['SCRIPT_NAME'] . '?logout=1">Yes</a> | <a href="index.php">No</a>
 echo '</p>' . "\n;
?> 