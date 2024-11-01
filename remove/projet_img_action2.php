<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 


/*
$id_projet_img_auto = $_POST["id_projet_img_auto"] ; 
 
 
 
 
*/


$img_projet_src_img = $_POST["img_projet_src_img"] ; 
  




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM  `projet_img` WHERE   `img_projet_src_img` = '$img_projet_src_img'") ;



?> 