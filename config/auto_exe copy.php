<?php
$path_general = "../function/";
$path_general_json = "../function_json/";
$path_class1 = "../Class/";
$path_class2 = "Class/";

/*

$databaseHandler = new DatabaseHandler($dbname, $username);
$nomBaseDeDonnees = $username;
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
// Obtenir la liste des tables
$tables = $databaseHandler->getListOfTables();
// Afficher les noms des colonnes
//   var_dump($databaseHandler->tableList_child);
$add_file_general__ = "<?php \n";
$add_file_general__ .= '$servername = "localhost";';
$add_file_general__ .= "\n";
$add_file_general__ .= '$src_general = "'.$path_class1.'";';
$add_file_general__ .= "\n";
$add_file_general__ .= 'require_once $src_general."dbCheck.php";';
$add_file_general__ .= "\n";
$add_file_general__ .= 'require_once $src_general."Give_url.php";';
$add_file_general__ .= "\n";
$add_file_general__ .= 'require_once $src_general."DatabaseHandler.php";';
$add_file_general__ .= "\n";
$add_file_general__ .= 'require_once $src_general."AsciiConverter.php";';
$add_file_general__ .= "\n";

$add_file_general__ .=
    <<<'PHP'
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;
$add_file_general__ .= "\n";
$add_file_general__ .= '$option0 =$_SESSION["option0"] ;';
$add_file_general__ .= "\n";
$add_file_general__ .= '$option1 =$_SESSION["option1"] ;';
$add_file_general__ .= "\n";
$add_file_general__ .= '$option2 =$_SESSION["option2"] ;';
$add_file_general__ .= "\n";
$add_file_general__ .= '$option3 =$_SESSION["option3"] ;';
$add_file_general__ .= "\n";
$add_file_general__ .= '$option4 =$_SESSION["option4"] ;';
$add_file_general__ .= "\n";
$add_file_general__ .=
    <<<'PHP'
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;
$add_file_general__ .= "\n";

$add_file_general__ .= '$dbname_ = $_SESSION["index"][0] ;';
$add_file_general__ .= "\n";
$add_file_general__ .= '$username_ = $_SESSION["index"][1]; ';
$add_file_general__ .= "\n";
$add_file_general__  .= '$req_sql = "SELECT * FROM `$option0` WHERE `$option1` = \'$option2\' ";';
$add_file_general__ .= "\n";




// SESSION_START
//   var_dump($databaseHandler->tableList_child);
$add_file_general__start = "<?php \n";
$add_file_general__start .= "session_start();";
$add_file_general__start .= "\n";
$add_file_general__start .= '$servername = "localhost";';
$add_file_general__start .= "\n";
$add_file_general__start .= '$src_general = "'.$path_class1.'";';
$add_file_general__start .= "\n";
$add_file_general__start .= 'require_once $src_general."dbCheck.php";';
$add_file_general__start .= "\n";
$add_file_general__start .= 'require_once $src_general."Give_url.php";';
$add_file_general__start .= "\n";
$add_file_general__start .= 'require_once $src_general."DatabaseHandler.php";';
$add_file_general__start .= "\n";
$add_file_general__start .= 'require_once $src_general."AsciiConverter.php";';
$add_file_general__start .= "\n";


$add_file_general__start .=
    <<<'PHP'
 $url = new Give_url();
$url->split_basename('__');


$option0 =$url->get_elements()[0];
$option1 =$url->get_elements()[1];
PHP;

$add_file_general__start .= "\n";


$add_file_general__start .=
    <<<'PHP'
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;
$add_file_general__start .= "\n";

$add_file_general__start .= '$dbname_ = $_SESSION["index"][0] ;';
$add_file_general__start .= "\n";
$add_file_general__start .= '$username_ = $_SESSION["index"][1]; ';
$add_file_general__start .= "\n";
$add_file_general__start  .= '$req_sql = "SELECT * FROM `' . $mainTableName . '` WHERE `$option0` = \'$option1\' ";';
$add_file_general__start .= "\n";



//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    // Instancier l'objet DatabaseHandler
    $add_file_general = "<?php \n";
    $add_file_general .= "session_start();";
    $add_file_general .= "\n";
    $add_file_general .= 'header("Access-Control-Allow-Origin: *");';
    $add_file_general .= "\n";
    $add_file_general .= '$servername = "localhost";';
    $add_file_general .= "\n";
     
    $add_file_general .= 'require_once $src_general."dbCheck.php";';
    $add_file_general .= "\n";
    $add_file_general .= 'require_once $src_general."Give_url.php";';
    $add_file_general .= "\n";
    $add_file_general .= 'require_once $src_general."DatabaseHandler.php";';
    $add_file_general .= "\n";
    $add_file_general .= 'require_once $src_general."AsciiConverter.php";';
    $add_file_general .= "\n";
    $add_file_general .= '$_SESSION["option0"] =$_POST["option0"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$_SESSION["option1"] =$_POST["option1"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$_SESSION["option2"] =$_POST["option2"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$_SESSION["option3"] =$_POST["option3"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$_SESSION["option4"] =$_POST["option4"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$option0 =$_POST["option0"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$option1 =$_POST["option1"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$option2 =$_POST["option2"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$option3 =$_POST["option3"] ;';
    $add_file_general .= "\n";
    $add_file_general .= '$option4 =$_POST["option4"] ;';
    $add_file_general .=
        <<<'PHP'

$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;
    $add_file_general .= "\n";

    $add_file_general .= '$databaseHandler->action_sql("UPDATE $option0  SET `$option1` = \'$option2\' WHERE  `$option3` =\'$option4\'") ;';
    $add_file_general .= "\n";
    $add_file_general .= "?>";
    $filePath =  $path_general  . "general_update.php";
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
        // echo "Le fichier a été créé avec succès.<br/>";
        array_push($source_file_array, $filePath);
    } else {
        // echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
    }

// INSEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEERT             START



$databaseHandler = new DatabaseHandler($dbname, $username);
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
// Instancier l'objet DatabaseHandler
$add_file_general = "<?php \n";
$add_file_general .= "session_start();";
$add_file_general .= "\n";
$add_file_general .= 'header("Access-Control-Allow-Origin: *");';
$add_file_general .= "\n";
$add_file_general .= '$servername = "localhost";';
$add_file_general .= "\n";
$add_file_general .= '$src_general="' . $path_class1 . '";';
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
$url = new Give_url();
$url->split_basename('__');
$option0 =$url->get_elements()[0];
$option1 =$url->get_elements()[1]; 
$option2 =$url->get_elements()[2]; 
 
PHP;
$add_file_general .= "\n";
 
$add_file_general .=
    <<<'PHP'
 
$req_sql = "SELECT * FROM `$option0` WHERE `$option1` = '$option2' "; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql, $option1);
$option1 = $databaseHandler->tableList_info;
$json = json_encode($option1);
echo $json;
PHP;





$add_file_general .= "\n";
$add_file_general .= "?>";
$filePath =  $path_general . "general_insert.php";
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
    // echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array, $filePath);
} else {
    // echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}



 
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$databaseHandler = new DatabaseHandler($dbname, $username);
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
// Instancier l'objet DatabaseHandler
$add_file_general = "<?php \n";
$add_file_general .= "session_start();";
$add_file_general .= "\n";
$add_file_general .= 'header("Access-Control-Allow-Origin: *");';
$add_file_general .= "\n";
$add_file_general .= '$servername = "localhost";';
$add_file_general .= "\n";
$add_file_general .= '$src_general="' . $path_class1 . '";';
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
$url = new Give_url();
$url->split_basename('__');
$option0 =$url->get_elements()[0];
$option1 =$url->get_elements()[1]; 
$option2 =$url->get_elements()[2]; 
 
PHP;
$add_file_general .= "\n";
 
$add_file_general .=
    <<<'PHP'
 $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet,id_sha1_parent_projet) VALUES ('$id_sha1_projet','$id_user_projet','$id_sha1_parent_projet')") ;

 
PHP;

 


$add_file_general .= "\n";
$add_file_general .= "?>";
$filePath =  $path_general . "general_select.php";
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
    // echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array, $filePath);
} else {
    // echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}




 
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/
$databaseHandler = new DatabaseHandler($dbname, $username);
// Récupérer la liste des tables
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
// Instancier l'objet DatabaseHandler
$add_file_general = "<?php \n";
$add_file_general .= "session_start();";
$add_file_general .= "\n";
$add_file_general .= 'header("Access-Control-Allow-Origin: *");';
$add_file_general .= "\n";
$add_file_general .= '$servername = "localhost";';
$add_file_general .= "\n";
$add_file_general .= '$src_general="' . $path_class1 . '";';
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
$url = new Give_url();
$url->split_basename('__');
$option0 =$url->get_elements()[0];
$option1 =$url->get_elements()[1]; 
$option2 =$url->get_elements()[2]; 
 
PHP;
$add_file_general .= "\n";
 
$add_file_general .=
    <<<'PHP'
 $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet,id_sha1_parent_projet) VALUES ('$id_sha1_projet','$id_user_projet','$id_sha1_parent_projet')") ;

 
PHP;

 


$add_file_general .= "\n";
$add_file_general .= "?>";
$filePath =  $path_general . "general_remove.php";
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
    // echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array, $filePath);
} else {
    // echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}

/*
$add_file_general = "";
$add_file_general .= "\n";
$add_file_general .= "<script>";
$add_file_general .= "\n";
$add_file_general .= '    function  general_js(_this) {
        var ok = new Information(_this.title); // création de la classe 
      
        const option = Array.from(_this.classList);       
        const option0 = option[0];
        const option1 = option[1]; 
        const option2 = option[2];
        const option3 = option[3];
        const option4 = option[4];

        ok.add("option0", option0); // ajout de l\'information pour lenvoi
        ok.add("option1", option1); // ajout de l\'information pour lenvoi
        ok.add("option2", option2); // ajout de l\'information pour lenvoi
        ok.add("option3", option3); // ajout de l\'information pour lenvoi
        ok.add("option4", option4); // ajout de l\'information pour lenvoi
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php  
    
    }';

$add_file_general .= "\n";
$add_file_general .= '    function  general_js_r(_this) {
        var ok = new Information(_this.title); // création de la classe 
     
        const option = Array.from(_this.classList);       
        const option0 = option[0];
        const option1 = option[1]; 
        const option2 = option[2];
        const option3 = option[3];
        const option4 = option[4];
         
        ok.add("option0", option0); // ajout de l\'information pour lenvoi
        ok.add("option1", option1); // ajout de l\'information pour lenvoi
        ok.add("option2", option2); // ajout de l\'information pour lenvoi
        ok.add("option3", option3); // ajout de l\'information pour lenvoi
        ok.add("option4", option4); // ajout de l\'information pour lenvoi
        console.log(ok.info());  
        ok.push(); // envoie l\'information au code php  

        const myTimeout = setTimeout(r, 250);
            function r() {
         location.reload() ; 
            }    
    }';
$add_file_general .= "\n";
$add_file_general .= "</script>";
// Définir le chemin et le nom du fichier à créer
$filePath = $path_general .  'general_js.php';
// Extraire le chemin du dossier (sans le nom du fichier)
$directoryPath = dirname($filePath);
// Vérifier si le dossier existe, sinon le créer
if (!is_dir($directoryPath)) {
    // Créer le dossier avec les permissions appropriées (0777 par défaut, vous pouvez ajuster)
    if (mkdir($directoryPath, 0777, true)) {
        echo "Le dossier a été créé avec succès.<br/>";
        array_push($source_file_array, $filePath);
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
    // echo "Le fichier a été créé avec succès.<br/>";
    array_push($source_file_array, $filePath);
} else {
    //  echo "Impossible d'ouvrir le fichier pour l'écriture.<br/>";
}
// 
*/