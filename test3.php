<?php 
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$src_general="Class/";
require_once $src_general."dbCheck.php";
require_once $src_general."Give_url.php";
require_once $src_general."DatabaseHandler.php";
require_once $src_general."AsciiConverter.php";
$url = new Give_url();
$url->split_basename('__');
$option0 =$url->get_elements()[0];
$option1 =$url->get_elements()[1]; 
$option2 =$url->get_elements()[2]; 
 
 
$req_sql = "SELECT * FROM `$option0` WHERE `$option1` = '$option2' "; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql, $option1);
$option1 = $databaseHandler->tableList_info;
$json = json_encode($option1);
echo $json;
?>