<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

$_SESSION["session_switch"] = $_POST["session_switch"] ; 
 
 

 
?>