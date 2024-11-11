<?php 
$req_sql_0 = 'SELECT * FROM `aliment` WHERE 1';

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "id_aliment");
$id_aliment_req_sql_url__id_aliment_0 = $databaseHandler->tableList_info;
        
$req_sql_url_id_aliment = 'SELECT * FROM `aliment` WHERE  `id_aliment` ="'.give_url().'" ';
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_url_id_aliment, "id_aliment");
$id_aliment_req_sql_url_id_aliment_0 = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "id_aliment");
$id_aliment_req_sql_0 = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "nom_aliment");
$nom_aliment_req_sql_url__nom_aliment_0 = $databaseHandler->tableList_info;
        
$req_sql_url_nom_aliment = 'SELECT * FROM `aliment` WHERE  `nom_aliment` ="'.give_url().'" ';
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_url_nom_aliment, "nom_aliment");
$nom_aliment_req_sql_url_nom_aliment_0 = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "nom_aliment");
$nom_aliment_req_sql_0 = $databaseHandler->tableList_info;

?>