 <?php 

 






 
// METHODE  update_1 add 
$divGenerator = new DivGenerator("root","div_generator", "add_1","__","mon text ");
//
$divGenerator->set_className("id_sha1_user", "123456");
// Ligne n°1 demande la ou je veux ajouter l'information 
// Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
// effectuer le changement de la ligne n°1  
$divGenerator->className_array();
// Appel direct de la méthode pour générer le div
 echo  $divGenerator->generateDiv(); // Cela va directement afficher le div géné

 echo $generatedDiv; 
// METHODE  update_1 add 
 




?>

