<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

$_SESSION["cookie_img"] = $_POST["cookie_img"] ; 
$_SESSION["cookie_titile"] = $_POST["cookie_titile"] ; 



 
?>