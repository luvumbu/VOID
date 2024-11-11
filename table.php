<?php

require_once 'Class/DatabaseHandler.php';



$source_file = array(
    "CRUDManager/",
    "CRUDManager/",
    "Toyota"
);




$permissions = 0777;

foreach ($source_file as $dossier) {
    if (!file_exists($dossier)) {
        if (mkdir($dossier, $permissions, true)) {
            echo "Dossier '$dossier' créé avec succès.<br>";
        } else {
            echo "Erreur : le dossier '$dossier' n'a pas pu être créé.<br>";
        }
    } else {
        echo "Le dossier '$dossier' existe déjà.<br>";
    }
}



echo "<br/>";

$columnNames = isset($_POST['column_name']) ? $_POST['column_name'] : [];
$columnTypes = isset($_POST['column_type']) ? $_POST['column_type'] : [];






$mainTableName = isset($_POST['main_table_name']) ? $_POST['main_table_name'] : '';




// Instancier l'objet DatabaseHandler
$databaseHandler = new DatabaseHandler("root", "root");

// Parcours des noms de colonnes et des types pour les définir
foreach ($columnNames as $index => $name) {
    echo "<br/>";

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



$phpContent_1 .= "session_start();";


$phpContent_1 .= "\n";






$phpContent_1 .= '$servername = "localhost";';
$phpContent_1 .= "\n";

// !

$phpContent_1 .= 'require_once "src_general.php";';
$phpContent_1 .= "\n";

$phpContent_1 .= 'require_once $src_general."dbCheck.php";';
$phpContent_1 .= "\n";

$phpContent_1 .= 'require_once $src_general."DatabaseHandler.php";';


$phpContent_1 .= "\n";


$phpContent_1 .= 'require_once $src_general."Give_url.php";';
$phpContent_1 .= "\n";

$phpContent_1 .= 'require_once $src_general."AsciiConverter.php";';





$phpContent_1 .= "\n";
//  !  



$phpConte__nt_js  = "";

// Construction de la requête de base avec le nom de la table
$phpContent_1 .= '$req_sql_0 = \'SELECT * FROM `' . $mainTableName . '` WHERE 1\';';
















$phpContent_1 .= "\n";

// Parcours des noms de colonnes et ajout dynamique dans le code PHP


var_dump($columnNames);
$i = 0;
foreach ($columnNames as $columnName) {
    echo "<br/>";

    $phpConte__nt_js .= "\n";

    $phpConte__nt_js .= '    function ' . $columnName . '(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '_up.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("' . $columnNames[0] . '", _this.className); // ajout de l\'information pour lenvoi 
        
         
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
    }';

    $phpConte__nt_js .= "\n";



    $phpConte__nt_js .= '    function ' . $columnName . '_r(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '_up.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("' . $columnNames[0] . '", _this.className); // ajout de l\'information pour lenvoi 
         
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php
        
        const myTimeout = setTimeout(r, 250);

function r() {
  location.reload(); 
}
    }';




    // remove JS 

    $phpConte__nt_js_remove .= "\n";

    $phpConte__nt_js_remove .= '    function ' . $columnName . '_remove(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '_remove.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
    }';

    $phpConte__nt_js_remove .= "\n";



    $phpConte__nt_js_remove .= '    function ' . $columnName . '_remove_r(_this) {
        var ok = new Information("' . $source_file[0] . $columnName . '_remove.php"); // création de la classe 
        ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php
        const myTimeout = setTimeout(r, 250);

function r() {
  location.reload(); 
}
    }';


    // remove JS 

    if ($i == 0) {







        $phpContent_1 .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_0, "' . $columnName . '");
$' . $columnName . '_req_sql_url__' . $columnName . '_' . $i . ' = $databaseHandler->tableList_info;
        ';
    }

    $php__Content_update = "<?php \n";

    $php__Content_update .= "\n";
    $php__Content_update .= "session_start();";
    $php__Content_update .= "\n";
    $php__Content_update .= 'header("Access-Control-Allow-Origin: *");';
    $php__Content_update .= "\n";


    $php__Content_update .= '$servername = "localhost";';
    $php__Content_update .= "\n";


    






    
    $php__Content_update .= "\n";
    $php__Content_update .= '$' . $columnNames[0] . ' = $_POST["' . $columnNames[0] . '"];';

    $php__Content_update .= "\n";

    $php__Content_update .= '$' . $columnName . ' = $_POST["' . $columnName . '"];';
    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once "src_general.php";';
    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."path_config.php";';
    $php__Content_update .= "\n";
    $php__Content_update .= 'require_once $src_general."Give_url.php";';
    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."DatabaseHandler.php";';


    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."AsciiConverter.php";';


    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."path_config.php";';


    $php__Content_update .= "\n";

    $php__Content_update .= 'require_once $src_general."path_config.php";';

    $php__Content_update .= "\n";

    $php__Content_update .= '$databaseHandler->action_sql("UPDATE  `' . $mainTableName . '` SET `' . $columnName . '` = ".$' . $columnName . '."   WHERE  `' . $columnNames[0] . '` =".$' . $columnNames[0] . '." ");';

    $php__Content_update .= "\n";

    $php__Content_update .= "?>";

    // Définir le chemin et le nom du fichier à créer
    $filePath = $source_file[1] . $columnName . '_up.php';

    // Créer ou ouvrir le fichier en mode écriture
    $file = fopen($filePath, 'w');

    // Vérifier si le fichier a bien été ouvert
    if ($file) {
        // Écrire le contenu dans le fichier
        fwrite($file, $php__Content_update);

        // Fermer le fichier après l'écriture
        fclose($file);
        echo "Le fichier a été créé avec succès.";
        echo "<br/>";
    } else {
        echo "Impossible d'ouvrir le fichier pour l'écriture.";
    }




    //  remove 
    $php__Content_remove = "<?php \n";

    $php__Content_remove .= "\n";
    $php__Content_remove .= "session_start();";
    $php__Content_remove .= "\n";
    $php__Content_remove .= 'header("Access-Control-Allow-Origin: *");';
    $php__Content_remove .= "\n";


    $php__Content_remove .= '$servername = "localhost";';
    $php__Content_remove .= "\n";


    






     
    $php__Content_remove .= "\n";
    $php__Content_remove .= '$' . $columnNames[0] . ' = $_POST["' . $columnNames[0] . '"];';

    $php__Content_remove .= "\n";

  

    $php__Content_remove .= 'require_once "src_general.php";';
    $php__Content_remove .= "\n";

    $php__Content_remove .= 'require_once $src_general."path_config.php";';
    $php__Content_remove .= "\n";
    $php__Content_remove .= 'require_once $src_general."Give_url.php";';
    $php__Content_remove .= "\n";

    $php__Content_remove .= 'require_once $src_general."DatabaseHandler.php";';


    $php__Content_remove .= "\n";

    $php__Content_remove .= 'require_once $src_general."AsciiConverter.php";';


    $php__Content_remove .= "\n";

    $php__Content_remove .= 'require_once $src_general."path_config.php";';


    
    $php__Content_remove .= "\n";

 


    $php__Content_remove .= "\n";

    $php__Content_remove .= 
    
<<<'PHP'
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
PHP;


$php__Content_remove .= "\n";



$php__Content_remove .= '$databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `'.$columnNames[0].'` = \'$'.$columnNames[0].'\'")' ;

    
     
    
    $php__Content_remove .= "\n";

    $php__Content_remove .= "?>";

    // Définir le chemin et le nom du fichier à créer
    $filePath = $source_file[1] . $columnName . '_remove.php';

    // Créer ou ouvrir le fichier en mode écriture
    $file = fopen($filePath, 'w');

    // Vérifier si le fichier a bien été ouvert
    if ($file) {
        // Écrire le contenu dans le fichier
        fwrite($file, $php__Content_remove);

        // Fermer le fichier après l'écriture
        fclose($file);
        echo "Le fichier a été créé avec succès.";
        echo "<br/>";
    } else {
        echo "Impossible d'ouvrir le fichier pour l'écriture.";
    }

    //  remove 


    
    
    
    







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
    $i++;
}
$i = 0;

$phpContent_1 .= "\n?>";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_up.php';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpContent_1);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}







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
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}



echo "<br/>";














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
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}










$phpConte__nt_js_remove .= "\n";

// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_remove.js';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpConte__nt_js_remove);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}




 




$phpContent_00 = "<?php";

$phpContent_00 .= "\n";


$phpContent_00 .= '$src_general="Class/";';

$phpContent_00 .= "\n";
$phpContent_00 .= "?>";








// Nom du fichier à créer
$fileName = $source_file[0] . "src_general.php";

// Crée ou ouvre le fichier en mode écriture
$file = fopen($fileName, "w");

// Vérifie si le fichier a bien été créé
if ($file) {
    // Écrit du contenu dans le fichier (facultatif)
    fwrite($file, $phpContent_00);

    // Ferme le fichier après écriture
    fclose($file);
    echo "Le fichier $fileName a été créé avec succès.";
} else {
    echo "Erreur lors de la création du fichier $fileName.";
}

































    // add 

    $php__Content_add = "<?php \n";

    $php__Content_add .= "\n";
    $php__Content_add .= "session_start();";
    $php__Content_add .= "\n";
    $php__Content_add .= 'header("Access-Control-Allow-Origin: *");';
    $php__Content_add .= "\n";


    $php__Content_add .= '$servername = "localhost";';
    $php__Content_add .= "\n";


    






     
    $php__Content_add .= "\n";
 

  

    $php__Content_add .= 'require_once "src_general.php";';
    $php__Content_add .= "\n";

    $php__Content_add .= 'require_once $src_general."path_config.php";';
    $php__Content_add .= "\n";
    $php__Content_add .= 'require_once $src_general."Give_url.php";';
    $php__Content_add .= "\n";

    $php__Content_add .= 'require_once $src_general."DatabaseHandler.php";';


    $php__Content_add .= "\n";

    $php__Content_add .= 'require_once $src_general."AsciiConverter.php";';


    $php__Content_add .= "\n";

    $php__Content_add .= 'require_once $src_general."path_config.php";';


    
    $php__Content_add .= "\n";

 


    $php__Content_add .= "\n";

    $php__Content_add .= 
    
<<<'PHP'
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
PHP;


$php__Content_add .= "\n";
$php__Content_add .= '$time = time();';
$php__Content_add .= "\n";





$php__Content_add .= '$databaseHandler->action_sql("INSERT INTO `'.$mainTableName.'` ('.$columnNames[0].') VALUES ($time)");' ;

     
    
    $php__Content_add .= "\n";

    $php__Content_add .= "?>";

    // Définir le chemin et le nom du fichier à créer
    $filePath = $source_file[1] . $mainTableName . '_add.php';

    // Créer ou ouvrir le fichier en mode écriture
    $file = fopen($filePath, 'w');

    // Vérifier si le fichier a bien été ouvert
    if ($file) {
        // Écrire le contenu dans le fichier
        fwrite($file, $php__Content_add);

        // Fermer le fichier après l'écriture
        fclose($file);
        echo "Le fichier a été créé avec succès.";
        echo "<br/>";
    } else {
        echo "Impossible d'ouvrir le fichier pour l'écriture.";
    }

    // add 















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