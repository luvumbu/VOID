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
 
// Récupérer l'URL complète
$requestUri = $_SERVER['REQUEST_URI'];

// Extraire la partie après "index.php/"
$urlPath = parse_url($requestUri, PHP_URL_PATH);
$urlParams = str_replace('index.php/', '', $urlPath);


?>




  <?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'Class/path_general_class.php';
  require_once 'Class/path_general_class.php';
  require_once 'Class/DivGenerator.php';


  $path_general_js = "function/general_js.php";
  if (file_exists($path_general_js)) {
    require_once $path_general_js;
  }

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
  ?>
          <meta http-equiv="refresh" content="0"> <!-- Rafraîchit toutes les 5 secondes -->
  <?php
        }  
      }  
    } else {
      // require_once 'view/form_creation_table_bdd.php';
      //  require_once 'view/test.php';
      if (isset($_SESSION["index"])) {
        require_once 'view/home.php';

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
 
  </div>


  