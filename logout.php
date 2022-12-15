<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:loginx.php");  /* Redirect to login page */
exit;
?>