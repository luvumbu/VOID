<?php

require_once 'Class/DatabaseHandler.php';





$columnNames = isset($_POST['column_name']) ? $_POST['column_name'] : [];
$columnTypes = isset($_POST['column_type']) ? $_POST['column_type'] : [];




 

$mainTableName = isset($_POST['main_table_name']) ? $_POST['main_table_name'] : '';




// Instancier l'objet DatabaseHandler
$databaseHandler = new DatabaseHandler("root", "root");

// Parcours des noms de colonnes et des types pour les définir
foreach ($columnNames as $index => $name) {
    // Définir le nom de la colonne
    $databaseHandler->set_column_names($name);

    // Définir le type de la colonne
    if (isset($columnTypes[$index])) {
        $databaseHandler->set_column_types($columnTypes[$index]);
    }
}

// Ajouter la table
$databaseHandler->add_table($mainTableName);



// Le contenu du fichier PHP que vous voulez créer
$phpContent_1 = "<?php \n";


$phpConte__nt_js  = "";

// Construction de la requête de base avec le nom de la table
$phpContent_1 .= '$req_sql_0 = \'SELECT * FROM `' . $mainTableName . '` WHERE 1\';';










$source_file = array(
    "CRUDManager/",
    "CRUDManager/",
    "Toyota"
);




$phpContent_1 .= "\n";

// Parcours des noms de colonnes et ajout dynamique dans le code PHP


var_dump($columnNames);
$i = 0;
foreach ($columnNames as $columnName) {

    $phpConte__nt_js .= "\n";

    $phpConte__nt_js .= '    function ' . $columnName . '(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("id", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
    }';

    $phpConte__nt_js .= "\n";



    $phpConte__nt_js .= '    function ' . $columnName . '_r(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("id", _this.className);    
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php
        
        const myTimeout = setTimeout(r, 250);

function r() {
  location.reload(); 
}
    }';


    if ($i == 0) {
        $phpContent_1 .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "' . $columnName . '");
$' . $columnName . '_req_sql_url__' . $columnName . '_' . $i . ' = $databaseHandler->tableList_info;
        ';  
    }

    $php__Content_update = "<?php \n";

/*    $php__Content_update .= "\n";   
    $php__Content_update .= "session_start();";  
    $php__Content_update .= "\n";    
    $php__Content_update .= 'header("Access-Control-Allow-Origin: *");';    
    $php__Content_update .= "\n";   
    
    */
    $php__Content_update .= '$servername = "localhost";';  
    $php__Content_update .= "\n";  
    $php__Content_update .= '$id = $_POST["id"];';   

  
    $php__Content_update .= "\n";    
    $php__Content_update .= '$'.$columnName.' = $_POST["'.$columnName.'"];';  
    $php__Content_update .= "\n";    
    $php__Content_update .= "\n";    



    $php__Content_update .= 'require_once "src_general.php";'; 
    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."path_config.php";';    
    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."DatabaseHandler.php";';  

     
    $php__Content_update .= "\n";
    
    $php__Content_update .= 'require_once $src_general."AsciiConverter.php";';  

      
    $php__Content_update .= "\n";
    
    $php__Content_update .= 'require_once $src_general."path_config.php";';  

       
    $php__Content_update .= "\n";
    
    $php__Content_update .= 'require_once $src_general."path_config.php";';  

    $php__Content_update .= "\n";



 

  







   






    $php__Content_update .= '$databaseHandler->action_sql("UPDATE  `'.$mainTableName.'` SET `'.$columnName.'` = ".$' . $columnName . '."   WHERE  `'.$columnNames[0].'` =".$' . $columnNames[0] . '." ");';
    
    $php__Content_update .= "\n";
   
    $php__Content_update .= "?>";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[1] . $columnName . '.php';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $php__Content_update);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}






    $phpContent_1 .= "\n";
    $phpContent_1 .= '$req_sql_url_' . $columnName . ' = \'SELECT * FROM `' . $mainTableName . '` WHERE  `' . $columnName . '` ="' . "'.give_url().'" . '" \';';




    $phpContent_1 .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_url_' . $columnName . ', "' . $columnName . '");
$' . $columnName . '_req_sql_url_' . $columnName . '_' . $i . ' = $databaseHandler->tableList_info;
';



    $phpContent_1 .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_' . $i . ', "' . $columnName . '");
$' . $columnName . '_req_sql_' . $i . ' = $databaseHandler->tableList_info;
';
}
$i = 0;

$phpContent_1 .= "\n?>";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '.php';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpContent_1);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}






$php__Content_update .= "\n?>";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_update.php';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $php__Content_update);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}

















$phpConte__nt_js .= "\n";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '.js';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpConte__nt_js);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}
?>



<script>
    function nom_function_add(_this) {
        var ok = new Information("CRUDManager/Cread/nom_function_add.php"); // création de la classe 
        ok.add("login", _this.title); // ajout de l'information pour lenvoi 
        ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
    }
</script>