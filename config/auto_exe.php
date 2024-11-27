<?php
$path_general1 = "../function/";
$path_general_json = "../function_json/";
$src_general1 = "../Class/";
$src_general2 = "Class/";

 
$databaseHandler = new DatabaseHandler($dbname, $username);
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
$add_file_general0 = "<?php \n"; 
$add_file_general0 .=
    <<<'PHP'
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
PHP;

$add_file_general0 .= "\n?>";

$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet,id_sha1_parent_projet) VALUES ('$id_sha1_projet','$id_user_projet','$id_sha1_parent_projet')") ;

$add_file_general1 = ""; 

$add_file_general1 .=     <<<'PHP'
 
PHP;

 
$filePath = $path_general2 . "general_doc.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general0, $source_file_array);
$fileHandler->processFile();
// Afficher les fichiers ajoutés
//print_r($source_file_array);



$filePath = $path_general2 . "general_doc2.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general1, $source_file_array);
$fileHandler->processFile();
// Afficher les fichiers ajoutés
//print_r($source_file_array);

?>
