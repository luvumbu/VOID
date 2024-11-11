<?php 
$servername = "localhost";
$id = $_POST["id"];
$id_aliment = $_POST["id_aliment"];
$id_general = $_POST["id_general"];
require_once "src_general.php";
require_once $src_general."path_config.php";
require_once $src_general."DatabaseHandler.php";
require_once $src_general."AsciiConverter.php";
require_once $src_general."path_config.php";
require_once $src_general."path_config.php";
$databaseHandler->action_sql("UPDATE  `aliment` SET `id_aliment` = ".$id_aliment."   WHERE  `id_aliment` =".$id_aliment." ");
?>