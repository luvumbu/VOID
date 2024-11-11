<?php
header("Access-Control-Allow-Origin: *");
require_once '../class/DatabaseHandler.php'; 


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
    } else {
        echo "Erreur lors de la création du fichier.";
    }
  
    



  
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
    $databaseHandler->add_table("userX");
    
    // Exemple de configuration du mot de passe (commenté)
     // $config_password_ = sha1($input_2);
 
    

 






















 
$databaseHandler = new DatabaseHandler($dbname,$username); 


$databaseHandler->set_column_names("id_projet");
$databaseHandler->set_column_names("id_user_projet");

$databaseHandler->set_column_names("id_sha1_projet");

$databaseHandler->set_column_names("id_sha1_parent_projet");
$databaseHandler->set_column_names("id_sha1_parent_projet2");



$databaseHandler->set_column_names("cryptage_projet");
$databaseHandler->set_column_names("input_cryptage_projet");




$databaseHandler->set_column_names("name_projet"); 
$databaseHandler->set_column_names("statue_projet"); 

$databaseHandler->set_column_names("title_projet"); 
$databaseHandler->set_column_names("description_projet"); 


$databaseHandler->set_column_names("password_projet");
$databaseHandler->set_column_names("visibility_1_projet");
$databaseHandler->set_column_names("visibility_2_projet");

$databaseHandler->set_column_names("screen_shoot_projet");

$databaseHandler->set_column_names("img_projet_src");
$databaseHandler->set_column_names("img_projet_visibility");


$databaseHandler->set_column_names("group_projet");



$databaseHandler->set_column_names("heure_debut_projet");
$databaseHandler->set_column_names("date_debut_projet");



$databaseHandler->set_column_names("dure_projet");
 
$databaseHandler->set_column_names("publication_date_j_projet");
$databaseHandler->set_column_names("publication_date_h_projet");




$databaseHandler->set_column_names("shop_projet");
$databaseHandler->set_column_names("date_inscription_projet");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

 
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");




$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("projet");





$databaseHandler = new DatabaseHandler($dbname,$username);  
$databaseHandler->set_column_names("id_projet_img_auto");
$databaseHandler->set_column_names("id_sha1_projet_img");



$databaseHandler->set_column_names("id_projet_img");
$databaseHandler->set_column_names("id_user_projet_img");
$databaseHandler->set_column_names("img_projet_src_img");
$databaseHandler->set_column_names("date_inscription_projet_img");


$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("projet_img");















$databaseHandler = new DatabaseHandler($dbname,$username);  
$databaseHandler->set_column_names("id_visit_user");
$databaseHandler->set_column_names("id_projet_visit_user");


$databaseHandler->set_column_names("ip1_visit_user");
$databaseHandler->set_column_names("ip2_visit_user");
$databaseHandler->set_column_names("ip3_visit_user");

$databaseHandler->set_column_names("ip4_visit_user");
$databaseHandler->set_column_names("ip5_visit_user");
$databaseHandler->set_column_names("ip6_visit_user");
$databaseHandler->set_column_names("ip7_visit_user");
$databaseHandler->set_column_names("ip8_visit_user");
$databaseHandler->set_column_names("ip9_visit_user");



$databaseHandler->set_column_names("x_visit_user");
$databaseHandler->set_column_names("y_visit_user");
$databaseHandler->set_column_names("click_visit_user");
$databaseHandler->set_column_names("screen_shoot_visit_user");







$databaseHandler->set_column_names("timestamp_visit_user");



 


$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
 

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");






$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("visit_user");








$databaseHandler = new DatabaseHandler($dbname,$username);  
$databaseHandler->set_column_names("id_option_projet");
$databaseHandler->set_column_names("start_option_projet");
$databaseHandler->set_column_names("sha1_option_projet");


$databaseHandler->set_column_names("ip1_option_projet");
$databaseHandler->set_column_names("ip2_option_projet");
$databaseHandler->set_column_names("ip3_option_projet");
$databaseHandler->set_column_names("ip4_option_projet");
$databaseHandler->set_column_names("ip5_option_projet");
$databaseHandler->set_column_names("ip6_option_projet");
$databaseHandler->set_column_names("ip7_option_projet");
$databaseHandler->set_column_names("ip8_option_projet");
$databaseHandler->set_column_names("ip9_option_projet");




$databaseHandler->set_column_names("timestamp_option_projet");



 


$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
 

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("option_projet");




$databaseHandler = new DatabaseHandler($dbname,$username);  
$databaseHandler->set_column_names("id_comment_projet");
$databaseHandler->set_column_names("id_sha1_comment_projet");

$databaseHandler->set_column_names("start_comment_projet");
$databaseHandler->set_column_names("text_comment_projet");
$databaseHandler->set_column_names("name_comment_projet");


$databaseHandler->set_column_names("sha1_comment_projet");


$databaseHandler->set_column_names("ip1_comment_projet");
$databaseHandler->set_column_names("ip2_comment_projet");
$databaseHandler->set_column_names("ip3_comment_projet");
$databaseHandler->set_column_names("ip4_comment_projet");
$databaseHandler->set_column_names("ip5_comment_projet");
$databaseHandler->set_column_names("ip6_comment_projet");
$databaseHandler->set_column_names("ip7_comment_projet");
$databaseHandler->set_column_names("ip8_comment_projet");
$databaseHandler->set_column_names("ip9_comment_projet");




$databaseHandler->set_column_names("timestamp_comment_projet");



 


$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
 

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("comment_projet");







 





































 














//














$databaseHandler = new DatabaseHandler($dbname,$username);  



$databaseHandler->set_column_names("id_social_media");
$databaseHandler->set_column_names("id_user_social_media");

$databaseHandler->set_column_names("id_sha1_social_media");

$databaseHandler->set_column_names("name_social_media"); 
$databaseHandler->set_column_names("statue_social_media"); 

$databaseHandler->set_column_names("title_social_media"); 
$databaseHandler->set_column_names("description_social_media"); 


$databaseHandler->set_column_names("password_social_media");
$databaseHandler->set_column_names("visibility_1_social_media");
$databaseHandler->set_column_names("visibility_2_social_media");
$databaseHandler->set_column_names("img_projet_src_social_media");
$databaseHandler->set_column_names("img_projet_visibility_social_media");



$databaseHandler->set_column_names("date_inscription_social_media");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('social_media');
























$databaseHandler = new DatabaseHandler($dbname,$username);  



$databaseHandler->set_column_names("id_group");
$databaseHandler->set_column_names("id_user_group");

$databaseHandler->set_column_names("id_sha1_group");

$databaseHandler->set_column_names("name_group"); 
$databaseHandler->set_column_names("statue_group"); 

$databaseHandler->set_column_names("title_group"); 
$databaseHandler->set_column_names("description_group"); 


$databaseHandler->set_column_names("password_group");
$databaseHandler->set_column_names("visibility_1_group");
$databaseHandler->set_column_names("visibility_2_group");
$databaseHandler->set_column_names("img_projet_src_group");
$databaseHandler->set_column_names("img_projet_visibility_group");



$databaseHandler->set_column_names("date_inscription_group");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('group_projet');





 







}

?>