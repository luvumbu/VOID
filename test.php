<?php 
session_start() ; 
 $_SESSION["option0"]="id_user" ; 
 $_SESSION["option1"]="1" ;

?>
<script>
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myArr = JSON.parse(this.responseText);
console.log(myArr) ; 
}
xmlhttp.open("GET", "function_json/root_start.php", true);
xmlhttp.send();
</script>