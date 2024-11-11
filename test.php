<?php 

$req_sql = 'SELECT * FROM `projet` WHERE 1 ';

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;
 


var_dump($id_projet) ; 
?>