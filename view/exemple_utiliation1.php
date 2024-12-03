<div class="test1">
    <div>
        <a href="Class/log_off.php">Déconnexion</a>
    </div>
    <div id="" onclick="general_send(this)" class="add_1__projet__id_sha1_user__<?php echo $_SESSION["index"][2] ?>">
        ADD
    </div>
</div>









<script>
    function afficherValeursFormattees(chaine) {
        // Diviser la chaîne par le caractère "_"
        const valeurs = chaine.split("__");
        // Retourner les valeurs dans un tableau
        return valeurs;
    }


    function general_send(_this) {

 

  //  <div id="" onclick="general_send(this)" class="add_1__root__id_sha1_user__Valeur_a_ajouter__<?php echo $_SESSION["index"][2] ?>">
  //      ADD
  //  </div>

    


        // Exemple d'utilisation

        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte);



        var ok = new Information("function/general.php"); // création de la classe 


        ok.add("option00", ""); // ajout de l'information pour lenvoi 
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[1] != undefined) {
            ok.add("option0_2", texteFormatte[1]); // ajout de l'information pour lenvoi
        }
        if (texteFormatte[2] != undefined) {
            ok.add("option1_1", texteFormatte[2]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[3] != undefined) {
            ok.add("option1_2", texteFormatte[3]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[4] != undefined) {
            ok.add("option2_1", texteFormatte[4]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[5] != undefined) {
            ok.add("option2_2", texteFormatte[5]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[6] != undefined) {
            ok.add("option3_1", texteFormatte[6]); // ajout de l'information pour lenvoi 
        }
        if (texteFormatte[7] != undefined) {
            ok.add("option3_2", texteFormatte[7]); // ajout de l'information pour lenvoi 
        }
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    }
</script>
<style>
    .test1 {
        display: flex;
        justify-content: space-around;
        background-color: black;
        transition: 1s all;
    }

    .test1 div {
        padding: 15px;
        color: green;
        border: 1px solid rgba(255, 255, 255, 0.6);

    }

    .test1 div:hover {
        background-color: white;
        transition: 1s all;
        color: black;
        cursor: pointer;
    }

    .test1 a {
        color: red;
        text-decoration: none;
    }
</style>


<?php

var_dump($_SESSION["index"]);

?>