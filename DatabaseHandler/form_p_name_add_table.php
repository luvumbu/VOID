<?php 

$req_sql = 'SELECT * FROM `'.$input_1.'` WHERE `nom_user`="'.$input_1.'"  AND `'.$input_2.'` ="'.$input_2.'" ';
$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "nom_user");
 
 

if($databaseHandler->verif!=1){
    
}
else {

$databaseHandler = new DatabaseHandler($input_1,$input_2); 
$databaseHandler->set_column_names("id_user");
$databaseHandler->set_column_names("id_sha1_user");

$databaseHandler->set_column_names("id_parent_user");
$databaseHandler->set_column_names("description_user");
$databaseHandler->set_column_names("title_user");
$databaseHandler->set_column_names("img_user");



$databaseHandler->set_column_names("nom_user");
$databaseHandler->set_column_names("prenom_user");
$databaseHandler->set_column_names("password_user");
$databaseHandler->set_column_names("email_user");
$databaseHandler->set_column_names("activation_user");



$databaseHandler->set_column_names("date_inscription_user");
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
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table($input_1);
//$config_password_ = sha1($input_2) ; 

 






















$databaseHandler = new DatabaseHandler($input_1,$input_2); 


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





$databaseHandler = new DatabaseHandler($input_1,$input_2); 
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















$databaseHandler = new DatabaseHandler($input_1,$input_2); 
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








$databaseHandler = new DatabaseHandler($input_1,$input_2); 
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




$databaseHandler = new DatabaseHandler($input_1,$input_2); 
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














$databaseHandler = new DatabaseHandler($input_1,$input_2); 



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
























$databaseHandler = new DatabaseHandler($input_1,$input_2); 



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



$req_sqlxx = 'SELECT * FROM `'.$input_1.'` WHERE `nom_user`="'.$input_1.'"  AND `password_user` ="'.$input_2.'" ';
$databaseHandlerxx = new DatabaseHandler($input_1, $input_2);
$databaseHandlerxx->getDataFromTable($req_sqlxx, "nom_user");


if(count($databaseHandlerxx->tableList_info)>0) {
   
}
else {
$databaseHandler->action_sql("INSERT INTO `$input_1` (nom_user,password_user) VALUES ('$input_1','$input_2')") ;
 
}







    
}










 


?>