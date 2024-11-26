<?php 
session_start() ; 

?>
<script>
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myArr = JSON.parse(this.responseText);
console.log(myArr) ; 
}
xmlhttp.open("GET", "function_json/root_start.php/id_user__2", true);
xmlhttp.send();
</script>