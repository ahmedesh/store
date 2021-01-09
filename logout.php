<?php  

session_start();      // start the session
session_unset();      //  remove all session variables
session_destroy();    // destroy the session
header('location:account.php');
exit();
?>


