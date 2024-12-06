<?php 
$servername = "localhost";
$src_general1 = "../Class/";
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$option0 =$_SESSION["option0"] ;
$option1 =$_SESSION["option1"] ;
$option2 =$_SESSION["option2"] ;
$option3 =$_SESSION["option3"] ;
$option4 =$_SESSION["option4"]  ;

$databaseHandler = new DatabaseHandler($dbname, $username);

if($option3!="" && $option4 !="" ){
$req_sql__ = 'SELECT * FROM `'.$option0.'` WHERE `'.$option1.'`="'.$option2.'" AND `'.$option3.'`="'.$option4.'" ' ; 
}
else {
$req_sql__ = 'SELECT * FROM `'.$option0.'` WHERE `'.$option1.'`="'.$option2.'"  ' ; 
}
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet,id_sha1_parent_projet) VALUES ('$id_sha1_projet','$id_user_projet','$id_sha1_parent_projet')") ;
?>