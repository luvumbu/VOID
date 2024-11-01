<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once '../class/path_config.php' ; 

require_once '../class/DatabaseHandler.php' ; 


$id_sha1_group = time() ; 

$id_projet  = $_POST["id_projet"] ; 
$name_group  = $_POST["name_group"] ; 


$req_sql__ = 'SELECT * FROM `group_projet` WHERE `name_group`="'.$name_group.'"' ; 

$databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler__->getDataFromTable($req_sql__, "id_group");
$id_group = $databaseHandler__->tableList_info;



if(count($id_group)<1){

$id_user_projet = $_SESSION["session_general"][0] ;
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `group_projet` (id_sha1_group,name_group,id_user_group) VALUES ('$id_sha1_group','$name_group','$id_user_projet')") ;
 
}

$req_sql__ = 'SELECT * FROM `group_projet` WHERE `name_group`="'.$name_group.'"' ; 

$databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler__->getDataFromTable($req_sql__, "id_group");
$id_group = $databaseHandler__->tableList_info;
 

 

$_SESSION['session_id_projet']  = $id_projet ; 
$_SESSION['session_name_group']  = $name_group ; 
$_SESSION['session_id_group']  = $id_group[0] ; 


 
?>