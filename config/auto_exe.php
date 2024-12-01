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

if(isset($_POST["option00"])){
 $src_general1 = "../Class/";
}
else {
$src_general1 = "Class/";
}
 
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);

PHP;




$add_file_general1 = $add_file_general0;
$add_file_general1 .=     <<<'PHP'

if(isset($_POST["option0_1"])){
$option0_1 = $_POST["option0_1"];
}
if(isset($_POST["option0_2"])){
    $option0_2 = $_POST["option0_2"];
}

 switch ($option0_2) {
    case 'add_1':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1) VALUES ('$option1_2')") ;

        break;

    case 'add_2':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $option2_1 =$_POST["option2_1"] ;
        $option2_2 =$_POST["option2_2"] ;

        $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1,$option2_1) VALUES ('$option1_2','$option2_2')") ;

        break;

    case 'add_3':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $option2_1 =$_POST["option2_1"] ;
        $option2_2 =$_POST["option2_2"] ;

        $option3_1 =$_POST["option3_1"] ;
        $option3_2 =$_POST["option3_2"] ;

        $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1,$option2_1,$option3_1) VALUES ('$option1_2','$option2_2','$option3_2')") ;

        break;

    case 'remove_1':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $databaseHandler->action_sql("DELETE FROM  `$option1_1` WHERE   `$option1_2` = '$option2_1'") ;

        break;        

    case 'update_1':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $option2_1 =$_POST["option2_1"] ;
        $option2_2 =$_POST["option2_2"] ;

        $databaseHandler->action_sql("UPDATE  `$option0_1` SET `$option1_1` = ' . `$option1_2` . '   WHERE  `$option2_1` ='.$option2_1. ' ");

        break;

    case 'update_2':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $option2_1 =$_POST["option2_1"] ;
        $option2_2 =$_POST["option2_2"] ; 

        $databaseHandler->action_sql("UPDATE  `$option0_1` SET `$option1_1` = ' . `$option1_2` . '  AND `$option2_1` = ' . `$option2_2` . '   WHERE  `$option2_1` ='.$option2_1. ' ");

        break;

    case 'select_1':

        $option1_1 =$_POST["option1_1"] ;
        $option1_2 =$_POST["option1_2"] ; 

        $option2_1 =$_POST["option2_1"] ;
        $option2_2 =$_POST["option2_2"] ;

        $option3_1 =$_POST["option3_1"] ;
        $option3_2 =$_POST["option3_2"] ;

        $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1,$option2_1,$option3_1) VALUES ('$option1_2','$option2_2','$option3_2')") ;

        break;

    case 'select_1':

        $option1_1 =$_SESSION["option1_1"] ;
        $option1_2 =$_SESSION["option1_2"] ; 

        $req_sql = "SELECT * FROM `$option0_1` WHERE `$option1_1` '$option1_2'  ";
        $databaseHandler->set_table_general($dbname);
        $databaseHandler->general_dynamique();
        //var_dump($dynamicVariables['description_user']);

        break;

    case 'select_2':

        $option1_1 =$_SESSION["option1_1"] ;
        $option1_2 =$_SESSION["option1_2"] ; 

        $option2_1 =$_SESSION["option2_1"] ;
        $option2_2 =$_SESSION["option2_2"] ;

        $req_sql = "SELECT * FROM `option0_1` WHERE `$option1_1` '$option1_2'  AND `$option2_1`='$option2_2' ";
        $databaseHandler->set_table_general($dbname);
        $databaseHandler->general_dynamique();
        //var_dump($dynamicVariables['description_user']);

        break;

}
?>
PHP;

$filePath =  $path_general1 . "/general.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general1, $source_file_array);
$fileHandler->processFile();
// Afficher les fichiers ajoutés
//print_r($source_file_array);
?>
