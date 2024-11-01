<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once '../class/path_config.php' ; 

require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 



 
$title_projet_ =  AsciiConverter::stringToAscii($_POST["title_projet_"])  ;  

$name_projet_ = AsciiConverter::stringToAscii( $_POST["name_projet_"])  ;  

$id_sha1_comment_projet = time() ; 
$sha1_option_projet =  $_SESSION["sha1_option_projet"] ; 


$text_comment_projet = AsciiConverter::stringToAscii($_POST["text_comment_projet"]) ; 
$name_comment_projet = AsciiConverter::stringToAscii($_POST["name_comment_projet"]) ; 
 





$id_user_projet = $_SESSION["session_general"][0] ;
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `comment_projet` (id_sha1_comment_projet,text_comment_projet,name_comment_projet,sha1_comment_projet) VALUES ('$id_sha1_comment_projet','$text_comment_projet','$name_comment_projet','$sha1_option_projet')") ;
 
?>