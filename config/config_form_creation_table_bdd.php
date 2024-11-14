<?php
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
$source_file = array(
    "../CRUDManager/"
);

$include_list = array(
    ""
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
$databaseHandler = new DatabaseHandler($dbname, $username);

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
$phpContent_1 .= "\n";// !
$phpContent_1 .= 'require_once "src_general.php";';
$phpContent_1 .= "\n";
$phpContent_1 .= 'require_once $src_general."dbCheck.php";';
$phpContent_1 .= "\n";
$phpContent_1 .= 'require_once $src_general."DatabaseHandler.php";';
$phpContent_1 .= "\n";
$phpContent_1 .= 'require_once $src_general."Give_url.php";';
$phpContent_1 .= "\n";
$phpContent_1 .= 'require_once $src_general."AsciiConverter.php";';
$phpContent_1 .= "\n";//  !  
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
    $phpConte__nt_js .= "<script>";
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


    $phpConte__nt_js .= "\n";
    $phpConte__nt_js .= "</script>";
    // remove JS 
    $phpConte__nt_js_remove .= "\n";
    $phpConte__nt_js_remove .= "<script>";


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
    $phpConte__nt_js_remove .= "</script>";
    // remove JS 







    // add JS 
    $phpConte__nt_js_add .= "\n";
    $phpConte__nt_js_add .= "<script>";

    $phpConte__nt_js_add .= '    function ' . $columnName . '_add(_this) {
            var ok = new Information("' . $source_file[0] . $columnName . '_add.php"); // création de la classe 
            ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
            console.log(ok.info());  
            ok.push(); // envoie l\'information au code php 
        }';
    $phpConte__nt_js_add .= "\n";
    $phpConte__nt_js_add .= '    function ' . $columnName . '_add_r(_this) {
            var ok = new Information("' . $source_file[0] . $columnName . '_add.php"); // création de la classe 
            ok.add("' . $columnName . '", _this.title); // ajout de l\'information pour lenvoi 
            console.log(ok.info());  
            ok.push(); // envoie l\'information au code php
            const myTimeout = setTimeout(r, 250);
            function r() {
            location.reload(); 
            }
             }';
    // add JS 












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
    $filePath = $source_file[0] . $columnName . '_up.php';
    // Créer ou ouvrir le fichier en mode écriture

    //array_push($include_list,$filePath);
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
    $php__Content_remove .= '$databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `' . $columnNames[0] . '` = \'$' . $columnNames[0] . '\'")';
    $php__Content_remove .= "\n";
    $php__Content_remove .= "?>";
    // Définir le chemin et le nom du fichier à créer
    $filePath = $source_file[0] . $columnName . '_remove.php';
    //array_push($include_list,$filePath);

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
// array_push($include_list,$filePath);

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
//array_push($include_list,$filePath);

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
// js_scrypt
$filePath = $source_file[0] . $mainTableName . '.php'; //jsjs
array_push($include_list, $filePath);

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
$filePath = $source_file[0] . $mainTableName . '_remove.php'; // jsjs
array_push($include_list, $filePath);

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

// add 
$phpConte__nt_js_add .= "\n";
// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_add.php'; // jsjs
//array_push($include_list, $filePath);

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');
// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpConte__nt_js_add);
    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}
// add



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
$php__Content_add .= '$databaseHandler->action_sql("INSERT INTO `' . $mainTableName . '` (' . $columnNames[0] . ') VALUES ($time)");';
$php__Content_add .= "\n";
$php__Content_add .= "?>";
// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_add.php';
//array_push($include_list,$filePath);

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

$php__include = "<?php";



foreach ($include_list as $file) {


    $php__include .= "\n";
    $php__include .= 'include_once "' . str_replace($source_file[0],"",$file). '";';
   
    $php__include .= "\n";
}
$php__include .= "?>";



// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $mainTableName . '_includes.php';
$filePath2 = str_replace("../","",$source_file[0]) . $mainTableName . '_includes.php';

array_push($include_list, $filePath);

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');
// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $php__include);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
    echo "<br/>";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}
// add 





$file = '../log.php';
$contenu_a_ajouter = "\n<?php \n  include_once \"$filePath2\" ;\n?>";

// Ouvre le fichier en mode ajout (append)
$fichier = fopen($file, 'a');

// Vérifie si le fichier est ouvert correctement
if ($fichier) {
    // Écrit le contenu à la fin du fichier


  
    

// Vérifie si le fichier existe avant d'essayer de le lire
if (file_exists($file)) {
    // Lit le contenu du fichier
    $content = file_get_contents($file);
    
    // Vérifie si le mot "verso" est présent dans le contenu
    if (strpos($content,  $contenu_a_ajouter) !== false) {
        echo "Le mot 'verso' a été trouvé dans le fichier.";
    } else {
           fwrite($fichier, $contenu_a_ajouter);

    // Ferme le fichier après écriture
    fclose($fichier);
    echo "Le contenu a été ajouté avec succès.";
    }
} else {
    echo "Le fichier n'existe pas.";
}
} else {
    echo "Impossible d'ouvrir le fichier.";
}


 


// Chemin vers le fichier


?>
