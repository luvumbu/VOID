<?php 
   
 
   $_SESSION["option0"] ="id_general";
   $_SESSION["option1"] ="123";
  require_once "function/projet.php" ; 
  
  
  var_dump($id_projet) ;
  var_dump($id_user_projet) ;
  var_dump($id_sha1_projet) ;
   
 
?>
<div class="display_flex">
    <div class="id_user_projet black" title="<?php echo $_SESSION["index"][2] ;?>" onclick="projet(this)">
        ADD
    </div>
    <a href="req/session_destroy.php">
        <div class="black">
            DISCONECT
        </div>
    </a>
</div>
<?php
require_once "home_nom_user.php";
?>

<style>
    .black {
        background-color: black;
        color: white;
        text-align: center;
        width: 100px;
        text-align: center;
        padding: 15px;
    }

    .black:hover {
        cursor: pointer;
    }
    .display_flex{
        display: flex;
        justify-content: space-around;
        margin-bottom: 150px;
    }
</style>