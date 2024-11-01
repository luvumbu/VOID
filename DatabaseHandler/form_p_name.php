<?php

require_once '../class/CheckFileExists.php';
require_once '../class/EmailValidator.php';




if ($_SESSION["path_config"] == 1) {
 

$path = "../class/path_config.php";


if (!checkFileExists($path)) {
  
  $databaseHandler = new DatabaseHandler($input_1, $input_2);
  $databaseHandler->action_sql("DROP TABLE projet_child") ;
  $databaseHandler->action_sql("DROP TABLE root") ;
  $databaseHandler->action_sql("DROP TABLE root_child") ;
  $databaseHandler->action_sql("DROP TABLE social_media") ;
  $databaseHandler->action_sql("DROP TABLE projet") ;
}  
    

  require_once '../class/path_config.php';
  //echo $config_dbname ;
  

  require_once '../DatabaseHandler/form_p_name_log.php';
  
 
} else {


   
  $req_sql = "SELECT * FROM `social_media` WHERE 1";
  $databaseHandler = new DatabaseHandler($input_1, $input_2);
  $databaseHandler->getDataFromTable($req_sql, "social_media_id_sha1");
  $name_projet = $databaseHandler->tableList_info;
  if ($databaseHandler->verif == 1) {

    require_once 'form_p_name_add_table.php';
    $nom_file = "../class/path_config.php";
    $texte = "<?php \n";
    $texte .= '$config_dbname ="' . $input_1 . '"' . ";\n";
    $texte .= '$config_password ="' . $input_2 . '";' . "\n";
    $texte .= "?>";
    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte);
    // fermeture
    fclose($f);
  }
}
 
 ?>