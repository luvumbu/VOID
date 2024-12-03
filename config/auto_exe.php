<?php
$path_general1 = "../function/";
$path_general_json = "../function_json/";
$src_general1 = "../Class/";
$src_general2 = "Class/";
$path_bool  ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
$add_file_general0 = "<?php \n";
$add_file_general0 .=
    <<<'PHP'
require_once "general_start.php";


if(isset($_POST["option0_1"])){
    $option0_1 =$_POST["option0_1"] ;
}
if(isset($_POST["option0_2"])){
    $option0_2 =$_POST["option0_2"] ;
}        
if(isset($_POST["option1_1"])){
    $option1_1 =$_POST["option1_1"] ;
}
if(isset($_POST["option1_2"])){
    $option1_2 =$_POST["option1_2"] ;
}
if(isset($_POST["option2_1"])){
    $option2_1 =$_POST["option2_1"] ;
}
if(isset($_POST["option2_2"])){
    $option2_2 =$_POST["option2_2"] ;
}
if(isset($_POST["option3_1"])){
    $option3_1 =$_POST["option3_1"] ;
}
if(isset($_POST["option3_2"])){
    $option3_2 =$_POST["option3_2"] ;
}


$servername = "localhost";
$option0_2 = $_POST["option0_2"];
if(isset($_POST["option00"])){
 $src_general1 = "../Class/";
 $path_bool  =0; 
}
else {
$src_general1 = "Class/";
 $path_bool  =1; 

}
 
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);

PHP;




$add_file_general1 = $add_file_general0;
$add_file_general1 .=     <<<'PHP'

 
$url = new Give_url();
$url->split_basename('__');

$count_url = count($url->get_elements()) ; 
 


/*
// model exemple d'utilisation coté utilisateur
<script>
    function afficherValeursFormattees(chaine) {
        // Diviser la chaîne par le caractère "_"
        const valeurs = chaine.split("__");
        // Retourner les valeurs dans un tableau
        return valeurs;
    }





    function general_send(_this) {

 

   // <div id="" onclick="general_send(this)" class="add_1__projet__id_sha1_user__<?php echo $_SESSION["index"][2] ?>">
   //     ADD
   //  </div>

    


        // Exemple d'utilisation

        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte);



        var ok = new Information("function/general.php"); // création de la classe 


        ok.add("option00", ""); // ajout de l'information pour lenvoi 
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[1] != undefined) {
            ok.add("option0_2", texteFormatte[1]); // ajout de l'information pour lenvoi
        }
        if (texteFormatte[2] != undefined) {
            ok.add("option1_1", texteFormatte[2]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[3] != undefined) {
            ok.add("option1_2", texteFormatte[3]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[4] != undefined) {
            ok.add("option2_1", texteFormatte[4]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[5] != undefined) {
            ok.add("option2_2", texteFormatte[5]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[6] != undefined) {
            ok.add("option3_1", texteFormatte[6]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[7] != undefined) {
            ok.add("option3_2", texteFormatte[7]); // ajout de l'information pour lenvoi 
        }
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    }
</script>


*/



 switch ($option0_1) {
    case 'add_1':



        $databaseHandler->action_sql("INSERT INTO `$option0_2` ($option1_1) VALUES ('$option1_2')") ;

// exemple d'utilisation 

/*
<script>
    
var ok = new Information("function/general.php"); // création de la classe 
ok.add("option00", "root"); // ajout de l'information pour lenvoi 
ok.add("option0_1", "root"); // ajout de l'information pour lenvoi 
ok.add("option0_2", "add_1"); // ajout de l'information pour lenvoi 

ok.add("option1_1", "id_sha1_user"); // ajout de l'information pour lenvoi 
ok.add("option1_2", "xXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"); // ajout de l'information pour lenvoi 
 
 
ok.push(); // envoie l'information au code pkp 


</script>

*/

        break;

    case 'add_2':

       $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1,$option2_1) VALUES ('$option1_2','$option2_2')") ;





        break;

    case 'add_3':

        $databaseHandler->action_sql("INSERT INTO `$option0_1` ($option1_1,$option2_1,$option3_1) VALUES ('$option1_2','$option2_2','$option3_2')") ;

        break;

    case 'remove_1':

        $databaseHandler->action_sql("DELETE FROM  `$option0_2` WHERE   `$option1_1` = '$option1_2'") ;
 
        break;        

    case 'update_1':
 
       $databaseHandler->action_sql("UPDATE  `$option0_2` SET `$option1_1` = '`$option1_2`'   WHERE  `$option2_1` ='$option2_2' ");
         break;

    case 'update_2':

        $databaseHandler->action_sql("UPDATE  `$option0_1` SET `$option2_1` = '$option2_2', `$option3_1` = '$option3_2'   WHERE  `$option1_1` ='$option1_2' ");

        break; 
    case 'update_3':

        $databaseHandler->action_sql("UPDATE  `$option0_1` SET `$option2_1` = '$option2_2', `$option3_1` = '$option3_2', `$option4_1` = '$option4_2'   WHERE  `$option1_1` ='$option1_2' ");

        break; 

}

 

 switch ($count_url) {

    case '3':
        $url_info = $url->get_elements();
        $option0_1 = $url_info[0];
        $option1_1 = $url_info[1];
        $option1_2 = $url_info[2];
        // Exemple d'utilisation n°6
        // Nom de la table 
        // puis de la colllone qu'on voudrais afficher
        $nom_table = $dbname;
        // nom de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = $option1_2";
        $databaseHandler->getListOfTables_Child($nom_table);
        $databaseHandler->getDataFromTable2X($req_sql);
        $databaseHandler->get_dynamicVariables();
       // var_dump($dynamicVariables['id_sha1_user']);
        // cet exemple permet de voir la liste total des element efant 
        // avec la valeur detaille sans perte de performance  

        break;

    case '5':

        $url_info = $url->get_elements();
 

        $option0_1 =$url_info[0];
        $option1_1 =$url_info[1] ; 
        $option1_2 =$url_info[2] ;
        
        $option2_1 =$url_info[3];
        $option2_2 =$url_info[4] ; 
 

        // Exemple d'utilisation n°6
        // Nom de la table 
        // puis de la colllone qu'on voudrais afficher
        $nom_table = $dbname;
        // nom de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = '$option1_2' AND $option2_1 = '$option2_2'" ;
        $databaseHandler->getListOfTables_Child($nom_table);
        $databaseHandler->getDataFromTable2X($req_sql);
        $databaseHandler->get_dynamicVariables();

        //   var_dump($url->get_elements()) ; 
       // var_dump($dynamicVariables['id_sha1_user']);
        // cet exemple permet de voir la liste total des element efant 
        // avec la valeur detaille sans perte de performance  
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




 




 
$add_file_general2 =     <<<'PHP'
<?php 
require_once "general_start.php";
$servername = "localhost";

$src_general1 = "Class/" ; 
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);

$option0_1 =$_SESSION["option0_1"] ;
$option0_2 =$_SESSION["option0_2"] ;
$option1_1 =$_SESSION["option1_1"] ;
$option1_2 =$_SESSION["option1_2"] ; 
$option2_1 =$_SESSION["option2_1"] ;
$option2_2 =$_SESSION["option2_2"] ; 
$option3_1 =$_SESSION["option3_1"] ;
$option3_2 =$_SESSION["option3_2"] ; 

switch ($option0_1) {
  case "1":

// Exemple d'utilisation n°6
// Nom de la table 
// puis de la colllone qu'on voudrais afficher
$nom_table = $dbname;
// nom de la table
$req_sql = "SELECT * FROM `$option0_2` WHERE $option1_1 = '$option1_2'" ;
$databaseHandler->getListOfTables_Child($option0_2);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

    
    break;
  case "2":

// Exemple d'utilisation n°6
// Nom de la table 
// puis de la colllone qu'on voudrais afficher
$nom_table = $dbname;
// nom de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = '$option1_2' AND $option2_1 = '$option2_2'" ;
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

 // var_dump($url->get_elements()) ; 
// var_dump($dynamicVariables['id_sha1_user']);
// cet exemple permet de voir la liste total des element efant 
// avec la valeur detaille sans perte de performance  
/*
 var_dump($dynamicVariables['id_sha1_user']);
<script>
    
        var ok = new Information("function/general.php"); // création de la classe 
        ok.add("option00", "root"); // ajout de l'information pour lenvoi 
        ok.add("option0_1", "root"); // ajout de l'information pour lenvoi 
        ok.add("option0_2", "add_3"); // ajout de l'information pour lenvoi 

        ok.add("option1_1", "id_sha1_user"); // ajout de l'information pour lenvoi 
        ok.add("option1_2", "xXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"); // ajout de l'information pour lenvoi 
        
        ok.add("option2_1", "id_parent_user"); // ajout de l'information pour lenvoi 
        ok.add("option2_2", "test ok"); // ajout de l'information pour lenvoi

        ok.add("option3_1", "description_user"); // ajout de l'information pour lenvoi 
        ok.add("option3_2", "test ok description_user"); // ajout de l'information pour lenvoi

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


</script>

*/

    break; 
}


?>
PHP;


 


$filePath =  $path_general1 . "/session.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general2, $source_file_array);
$fileHandler->processFile();
// Afficher les fichiers ajoutés
//print_r($source_file_array);



 


$general_file =     <<<'PHP'
<?php  


?>
PHP;



$filePath =  $path_general1 . "/general_start.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $general_file , $source_file_array);
$fileHandler->processFile();
// Afficher les fichiers ajoutés
//print_r($source_file_array);




 



