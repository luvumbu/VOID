<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 



  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';
  require_once 'class/tempsDeLecture.php' ; 
  require_once 'class/CheckFileExists.php' ;  
// Example usage
$path = "conf/dbCheck.php";
if (checkFileExists($path)) {
  require_once  'conf/dbCheck.php' ; 
 require_once 'test2.php' ;  
}
else {

    require_once 'view/loginVerificationForm.php' ; 
  }





$id_matable_histoi = "1" ; 
$databaseHandler = new DatabaseHandler("root", "root");

$databaseHandler->action_sql("UPDATE  `matable_histoi` SET `nom_matable_histoi` = '1234'   WHERE  `id_matable_histoi` ='".$id_matable_histoi."' ");

  ?>
<script src="Class/js.js"></script>

 