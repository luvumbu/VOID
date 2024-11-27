<?php 
$servername = "localhost";
$src_general1 = "../Class/";
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);
$option0 =$_SESSION["option0"] ;
$option1 =$_SESSION["option1"] ;
$option2 =$_SESSION["option2"] ;
$option3 =$_SESSION["option3"] ;
$option4 =$_SESSION["option4"] ;

?>