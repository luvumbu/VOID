<?php 
$servername = "localhost";
$id = $_POST["id"];
$nom_aliment = $_POST["nom_aliment"];

require_once "src_general.php";
require_once $src_general."path_config.php";
require_once $src_general."DatabaseHandler.php";
require_once $src_general."AsciiConverter.php";
require_once $src_general."path_config.php";
require_once $src_general."path_config.php";
$databaseHandler->action_sql("UPDATE  `aliment` SET `nom_aliment` = ".$nom_aliment."   WHERE  `id_aliment` =".$id_aliment." ");
?>