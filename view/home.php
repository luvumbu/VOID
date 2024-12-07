 <?php 
// METHODE  update_1 add 



$src_btn1= '<img width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1"/>' ; 

$divGenerator = new DivGenerator("projet","div_generator", "add_2","__",$src_btn1);
$divGenerator->set_className("id_user_projet", $_SESSION["index"][2]);
$divGenerator->set_className("id_sha1_projet",time());
 
// Ligne n°1 demande la ou je veux ajouter l'information 
// Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
 // Appel direct de la méthode pour générer le div
echo  $divGenerator->generateDiv(); // Cela va directement afficher le div géné
 

 
// METHODE  update_1 add 
?>
<div id="demo"></div>
<style>
    #div_generator{
        
        color: white;
        cursor: pointer;
    }
</style>

<script>
    document.getElementById('div_generator').addEventListener('click', function() {
   

        const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", "view/demo.php");
  xhttp.send();


});



</script>
