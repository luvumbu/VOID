<?php 

session_start() ; 
 
require_once '../class/CheckFileExists.php' ; 
require_once '../class/Delete_file.php' ; 



$img_projet_src = "../img_user_action/".$_POST["img_projet_src"] ; 
 


 
if (checkFileExists($img_projet_src)) { 
 
delete_file($img_projet_src);


}  
?>