<?php 
session_start();
unset($_SESSION["facultyid"]);
unset($_SESSION["phone"]);
unset($_SESSION["fullname"]);
unset($_SESSION["email"]);
$_SESSION['load']=false;
header("Location:index.php");
?>