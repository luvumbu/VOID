<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once '../Class/DatabaseHandler.php'; 
require_once '../Class/dbCheck.php'; 




$servername = "localhost";
$dbname_ =$_POST["dbname"] ;
$username_ =$_POST["username"] ;
// Create connection
 


 

$req_sql = 'SELECT * FROM `'.$dbname.'` WHERE `nom_user`="'.$dbname_.'" AND `password_user`="'.$username_.'" ';

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql, "id_user");
$id_user = $databaseHandler->tableList_info;
 
 


if($id_user[0]!=""){
       $_SESSION["index"] = array($dbname_, $username_,$id_user[0]);
}
 


 
?>