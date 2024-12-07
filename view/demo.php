
<?php 
session_start() ; 
 
require_once '../Class/path_general_class.php'; 
require_once '../Class/DivGenerator.php';
require_once '../Class/DatabaseHandler.php'; 
require_once '../Class/dbCheck.php'; 


// Exemple d'utilisation n°8
// cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
// demad

 

$id_user_projet = $_SESSION["index"][2] ; 


 
$databaseHandler = new DatabaseHandler($dbname, $username);
/*
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler->tableList_info;
 */



$databaseHandler->set_mysql_general("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user_projet ' ");
// nom table + mysql+ connoles demande
$databaseHandler->set_table_general("projet");
$databaseHandler->general_dynamique();

var_dump($dynamicVariables['id_projet']);
 
 


 
 



 ?>