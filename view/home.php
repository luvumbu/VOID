 <?php 

  
 
// METHODE  update_1 add 
$divGenerator = new DivGenerator("root","div_generator_idedlededededed", "update_1","__",'My source');
//
$divGenerator->set_className("id_user", "200");
$divGenerator->set_className("id_parent_user", "void");
 


 

 

 

// Ligne n°1 demande la ou je veux ajouter l'information 
// Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
// effectuer le changement de la ligne n°1  

 
$divGenerator->className_array();
// Appel direct de la méthode pour générer le div


 echo  $divGenerator->generateDiv(); // Cela va directement afficher le div géné

 




 



 echo $divGenerator->get_input() ; 
 
 
 


?>