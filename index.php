<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'Class/path_general_class.php';
  // Example usage
  $path = "Class/dbCheck.php";
  if (checkFileExists($path)) {
    require_once  'Class/dbCheck.php';
    $databaseHandler = new DatabaseHandler($dbname, $username); 

    if($databaseHandler->verif!=1){
      require_once 'view/loginVerificationForm.php';

    }
    else {
      require_once 'view/form_creation_table_bdd.php';

    }

  } else {



   
    require_once 'view/loginVerificationForm.php';
  }
  ?>
  <script src="Class/js.js"></script>
  <?php
  require_once 'log/log.php';


  ?>
  <div id="dowload_file" class="display_none">
    <?php

    require_once 'view/dowload_file.php';

    ?>
  </div>

  <style>
    .display_none{
      display: none;
    }
  </style>