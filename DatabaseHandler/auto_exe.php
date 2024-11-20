<?php


date_default_timezone_set('Europe/Paris');


/*


        var ok = new Information("function/remove/root_remove.php"); // création de la classe 
         ok.add("title", _this.title); // ajout de l'information pour lenvoi 
         ok.add("className", _this.className); // ajout de l'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php 


        */

$name_file = array(
    $mainTableName,
    $mainTableName . '.php',
    $mainTableName . '_js.php',
    "src_general.php"



);

$source_file = array(
    "../function/add/",
    "function/add/" . $name_file[1],
    "../../Class/",
    "../view/includes.php",
    "function/add/" . $name_file[2],
    "../function/remove/",
    '../../function/add/',
    '../../function/remove/'






);


$source_file_array = array();



 

$columnNames = isset($databaseHandler->column_names) ? $databaseHandler->column_names : [];
$columnTypes = isset($databaseHandler->column_types) ? $databaseHandler->column_types : [];

// Instancier l'objet DatabaseHandler







$add_file_general = "<?php \n";
$add_file_general .= "\n";
$add_file_general .= "session_start();";
$add_file_general .= "\n";
$add_file_general .= 'header("Access-Control-Allow-Origin: *");';
$add_file_general .= "\n";
$add_file_general .= '$servername = "localhost";';
$add_file_general .= "\n";

$add_file_general .= 'require_once "src_general.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."dbCheck.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."Give_url.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."DatabaseHandler.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."AsciiConverter.php";';


$add_file_general .= "\n";
$add_file_general .=
    <<<'PHP'
 
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;
$add_file_general .= "\n";
$add_file_general .= '$time = time();';
$add_file_general .= "\n";
$add_file_general .= '$databaseHandler->action_sql("INSERT INTO `' . $mainTableName . '` (' . $columnNames[0] . ') VALUES ($time)");';
$add_file_general .= "\n";
$add_file_general .= "?>";




// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $name_file[1];



// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
      //  array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

// Ajouter le chemin du fichier à la liste des inclusions
 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}













$add_file_general = "";


$add_file_general .= "\n";
$add_file_general .= "<script>";
$add_file_general .= "\n";
$add_file_general .= '    function ' . $mainTableName . '_remove(_this) {
        var ok = new Information("function/' . $mainTableName . '"); // création de la classe 
        ok.add("title", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("className", _this.className); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
    }';
$add_file_general .= "\n";
$add_file_general .= '    function ' . $mainTableName . '_remove_r(_this) {
        var ok = new Information("function/' . $mainTableName . '"); // création de la classe 
         ok.add("title", _this.title); // ajout de l\'information pour lenvoi 
        ok.add("className", _this.className); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
        const myTimeout = setTimeout(r, 250);
function r() {
  location.reload(); 
}
    } </script>';








// Définir le chemin et le nom du fichier à créer
$filePath = "../function/remove/" . $mainTableName . "_js.php";
 

// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
        array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

// Ajouter le chemin du fichier à la liste des inclusions
 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}







$add_file_general = "";


$add_file_general .= "\n";
$add_file_general .= "<script>";
$add_file_general .= "\n";
$add_file_general .= '    function ' . $mainTableName . '(_this) {
        var ok = new Information("function/add/' . $mainTableName . '.php"); // création de la classe 
       ok.add("title", _this.title); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php 
    }';
$add_file_general .= "\n";
$add_file_general .= '    function ' . $mainTableName . '_r(_this) {
        var ok = new Information("function/add/' . $mainTableName . '.php"); // création de la classe 
        ok.add("title", _this.title); // ajout de l\'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php
        const myTimeout = setTimeout(r, 250);
function r() {
  location.reload(); 
}
    } </script>';








// Définir le chemin et le nom du fichier à créer
$filePath = "../function/add/" . $mainTableName . '_js.php';
 

// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
        array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}














// 

$src_general = $source_file[6];

$add_file_general = "";


$add_file_general .=  "<?php";
$add_file_general .=  "\n";
$add_file_general .=  '$src_general ="' . $src_general . '";';
$add_file_general .=  "\n";
$add_file_general .=  "?>";












// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[0] . $name_file[3];

// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
   //     array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

// Ajouter le chemin du fichier à la liste des inclusions
 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
  //  array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}

//






















$add_file_general = "<?php";
$add_file_general .= "\n";
$add_file_general .= 'include "' . $source_file[4] . '" ;';
$add_file_general .= "\n";
$add_file_general  .= "?>";








$filePath = $source_file[3];

// Vérifie si le fichier existe
if (!file_exists($filePath)) {
    // Crée le fichier si nécessaire
    $file = fopen($filePath, 'a'); // Ouvre en mode ajout
    if (!$file) {
        die("Impossible de créer le fichier : $filePath");
    }
    fclose($file); // Ferme immédiatement après la création
}

// Vérifie si le contenu à ajouter existe déjà dans le fichier
$currentContent = file_exists($filePath) ? file_get_contents($filePath) : ''; // Lit le contenu existant

if (strpos($currentContent, $add_file_general) === false) {
    // Si le contenu n'est pas déjà présent, on l'ajoute
    $file = fopen($filePath, 'a'); // Ouvre en mode ajout
    if ($file) {
        fwrite($file, $add_file_general); // Ajoute le nouveau contenu
        fclose($file); // Ferme le fichier après écriture
        echo "Écriture réussie dans le fichier : $filePath";
    } else {
        die("Erreur lors de l'ouverture du fichier pour écriture : $filePath");
    }
} else {
    echo "Le contenu existe déjà dans le fichier : $filePath";
}



echo $columnName . '<br/>';






$add_file_general = "<?php \n";
$add_file_general .= "\n";
$add_file_general .= "session_start();";
$add_file_general .= "\n";
$add_file_general .= 'header("Access-Control-Allow-Origin: *");';
$add_file_general .= "\n";
$add_file_general .= '$servername = "localhost";';
$add_file_general .= "\n";
$add_file_general .= 'require_once "src_general.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."dbCheck.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."Give_url.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."DatabaseHandler.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."AsciiConverter.php";';
$add_file_general .= "\n";
$add_file_general .= 'require_once $src_general."dbCheck.php";';
$add_file_general .= "\n";





$add_file_general .= '$title = $_POST["title"] ;';

$add_file_general .= "\n";


$add_file_general .= '$className = $_POST["className"] ;';






$add_file_general .=
    <<<'PHP'
 
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;





$add_file_general .=  "\n";


$add_file_general .= '$databaseHandler->action_sql("DELETE FROM  `' . $mainTableName . '` WHERE   `$className` = $title") ;';
$add_file_general .= "\n";
$add_file_general .= "?>";




// Définir le chemin et le nom du fichier à créer
$filePath = $source_file[5] . $mainTableName . '_remove.php';

// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
   //     array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

// Ajouter le chemin du fichier à la liste des inclusions
 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}
























$add_file_general = "";


$add_file_general .=  "<?php";
$add_file_general .=  "\n";
$add_file_general .=  '$src_general ="' . $source_file[2] . '";';
$add_file_general .=  "\n";
$add_file_general .=  "?>";












// Définir le chemin et le nom du fichier à créer
$filePath = "../function/remove/src_general.php";

// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
        array_push($source_file_array,$filePath );
    } else {
        echo "Impossible de créer le dossier.<br/>";
    }
}

 

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $add_file_general);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array,$filePath );
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}

//



var_dump($source_file_array) ; 



/*
foreach ($columnNames as $columnName) {   



}

 */
