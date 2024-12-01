<?php 

require_once "Class/js.php" ; 


?>


<script>
    
var ok = new Information("function/add_general.php"); // création de la classe 
ok.add("option0_1", "root"); // ajout de l'information pour lenvoi 
ok.add("option0_2", "1"); // ajout de l'information pour lenvoi 
ok.add("option1_1", "id_sha1_user"); // ajout de l'information pour lenvoi 
ok.add("option1_2", "123456789"); // ajout de l'information pour lenvoi 
 
 

 


 
 

 
 
 




console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




</script>