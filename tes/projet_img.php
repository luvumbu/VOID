<?php 

session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
require_once "src_general.php";
require_once $src_general."dbCheck.php";
require_once $src_general."Give_url.php";
require_once $src_general."DatabaseHandler.php";
require_once $src_general."AsciiConverter.php";
$title = $_POST["title"] ;
$option =$_POST["option"] ;
$_SESSION["title"] = $_POST["title"] ;
$_SESSION["option"] =$_POST["option"] ;
$className = $_POST["className"] ;
$_SESSION["className"] = $_POST["className"] ;
 
$databaseHandler = new DatabaseHandler($dbname, $username);
// $_SESSION["index"] = array($dbname_, $username_);
$databaseHandler->action_sql("INSERT INTO `` ($className) VALUES ('$title')");
?>