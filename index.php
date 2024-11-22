<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="https://ih1.redbubble.net/image.1762483057.7729/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.webp">
</head>
<style>
  .display_none {
    display: none;
  }
</style>

<body>
  <?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'Class/path_general_class.php';
  // Example usage
  $path = "Class/dbCheck.php";
  if (checkFileExists($path)) {
    require_once  'Class/dbCheck.php';
    $databaseHandler = new DatabaseHandler($dbname, $username);

    if ($databaseHandler->verif != 1) {
      require_once 'view/verifyConnection.php';
      if (file_exists($path)) {
        // Tente de supprimer le fichier
        if (unlink($path)) {
          echo "Le fichier '$path' a été supprimé avec succès.";
  ?>
          <meta http-equiv="refresh" content="0"> <!-- Rafraîchit toutes les 5 secondes -->
        <?php
        } else {
          echo "Erreur : Impossible de supprimer le fichier '$path'.";
        }
      } else {
        echo "Le fichier '$path' n'existe pas.";
      }
    } else {
      // require_once 'view/form_creation_table_bdd.php';
      //  require_once 'view/test.php';
      if (isset($_SESSION["index"])) {
        require_once 'view/home.php';
        ?>
        <a href="req/session_destroy.php">
          <img width="100" height="100" src="https://img.icons8.com/fluency/100/switch-off.png" alt="switch-off" />
        </a>
  <?php
        if ($_SESSION["index"][0] == $dbname && $_SESSION["index"][1]  == $username) {

          echo '<div class="display_none">';
          require_once 'view/admin_form_creation_table_bdd.php';
          echo '</div>';
        } else {
        }
      } else {
        require_once 'view/verifyConnection.php';
      }
    }
  } else {
    require_once 'view/login_bdd.php';
  }
  ?>
  <script src="Class/js.js"></script>
  <?php
  // require_once 'log/log.php';
  // requare all 
  ?>
  <div id="dowload_file" class="display_none">
    <?php
    require_once 'view/dowload_file.php';
    // cette log permet de charger toute les fuction ont peut les deselectionner pour choissir cel qui conviens 
    ?>
  </div>