<?php 

require_once 'Class/js.php' ;



?>

<script>

 
        var ok = new Information("function/remove/root_remove.php"); // création de la classe 
         ok.add("title", _this.title); // ajout de l'information pour lenvoi 
         ok.add("className", _this.className); // ajout de l'information pour lenvoi 
        console.log(ok.info());  
        ok.push(); // envoie l'information au code php 
   
</script>

<h1 class="title"  title="ok">HELLO</h1>