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
$path = "Class/dbCheck.php";
if (checkFileExists($path)) {
  require_once  'Class/dbCheck.php' ; 
 require_once 'test2.php' ;  
}
else {

    require_once 'view/loginVerificationForm.php' ; 
  }




 
  ?>
<script src="Class/js.js"></script>

 