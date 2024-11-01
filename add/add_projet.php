<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once '../class/path_config.php' ; 

require_once '../class/DatabaseHandler.php' ; 


$id_sha1_projet = time() ; 


$id_sha1_parent_projet = $_POST["id_sha1_parent_projet"] ; 

$id_user_projet = $_SESSION["session_general"][0] ;
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet,id_sha1_parent_projet) VALUES ('$id_sha1_projet','$id_user_projet','$id_sha1_parent_projet')") ;


?>