<?php
header("Access-Control-Allow-Origin: *");
require_once '../Class/DatabaseHandler.php'; 



$servername = "localhost";
$dbname =$_POST["dbname"] ;
$username =$_POST["username"] ;
// Create connection
 
 


$databaseHandler = new DatabaseHandler($dbname, $username);
if ($databaseHandler->verif != 1) {
  
    echo 'FAKE' ; 
}
else {
  






 
    // Nom du fichier que tu veux créer
    $nomFichier = "../Class/dbCheck.php";
    
    // Utilisation de fopen() pour créer et ouvrir le fichier en mode écriture ('w')
    // Le mode 'w' crée un fichier vide pour l'écriture (ou vide le fichier s'il existe déjà)
    $fichier = fopen($nomFichier, 'w');
    
    // Vérifie si le fichier a bien été ouvert
    if ($fichier) {
    
    
        // Contenu à écrire dans le fichier
        $contenu = "<?php \n";
        $contenu =  $contenu.'$dbname = "'.$dbname.'";'."\n";
        $contenu =  $contenu.'$username = "'.$username.'";'."\n";
        $contenu = $contenu."?>\n";
      
    
        
    
        // Écriture du contenu dans le fichier
        fwrite($fichier, $contenu);
    
        // Fermeture du fichier après écriture
        fclose($fichier);
    
        echo "Le fichier a été créé et le contenu a été écrit avec succès.";




        require_once '../Class/dbCheck.php'; 
      

   


        




    // Initialisation du gestionnaire de base de données
    $databaseHandler = new DatabaseHandler($dbname, $username);
    
    // Définition des colonnes et de leurs types dans un tableau associatif
    $columns = [
        "id_user"               => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
        "id_sha1_user"          => "LONGTEXT NOT NULL",
        "id_parent_user"        => "LONGTEXT NOT NULL",
        "description_user"      => "LONGTEXT NOT NULL",
        "title_user"            => "LONGTEXT NOT NULL",
        "img_user"              => "LONGTEXT NOT NULL",
        "nom_user"              => "LONGTEXT NOT NULL",
        "prenom_user"           => "LONGTEXT NOT NULL",
        "password_user"         => "LONGTEXT NOT NULL",
        "email_user"            => "LONGTEXT NOT NULL",
        "activation_user"       => "LONGTEXT NOT NULL",
        "date_inscription_user" => "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
    ];
    
    // Itération sur le tableau pour définir les noms et types de colonnes
    foreach ($columns as $name => $type) {
        $databaseHandler->set_column_names($name);
        $databaseHandler->set_column_types($type);
    }
    
    // Ajout de la table à la base de données
    $databaseHandler->add_table($dbname);






    


$req_sqlxx = 'SELECT * FROM `'.$dbname.'` WHERE `nom_user`="'.$dbname.'"  AND `password_user` ="'.$username.'" ';
$databaseHandlerxx = new DatabaseHandler($dbname, $input_2);
$databaseHandlerxx->getDataFromTable($req_sqlxx, "nom_user");


if(count($databaseHandlerxx->tableList_info)>0) {
   
}
else {
$databaseHandler->action_sql("INSERT INTO `$dbname` (nom_user,password_user) VALUES ('$dbname','$username')") ;
 
}
 

    } else {
        echo "Erreur lors de la création du fichier.";
    }
  

}

 
require_once '../config/table_auto.php'; 
// creation des table automatiquement et des methodes egalement 

 ?>