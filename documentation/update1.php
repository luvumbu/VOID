<!-- Section principale avec une structure flexible pour les éléments -->
<div class="test1">
    <!-- Lien de déconnexion -->
    <div>
        <a href="Class/log_off.php">Déconnexion</a>
    </div>
    <!-- Section avec un événement 'onclick' pour déclencher la fonction 'general_send' -->
    <div id="update_1__update_1_text01" onclick="general_send(this)" class="update_1__root__id_sha1_user__NEUTRE__id_user__5">
        ADD
    </div>
</div>


<textarea name="" id="update_1_text01">
 Lorem ipsum dolor sit ame't consect''etur adipi"sicing""" elit. Illo sint, aliquam ut animi quasi ad asperiores distinctio debitis, recusandae nisi dolorum, excepturi molestiae eligendi quisquam corrupti in itaque necessitatibus sit.

</textarea>


<?php
// Définition de la structure utilisée pour la classe et les valeurs à séparer
// Exemple de structure : add_1__projet__id_sha1_user__

// Commentaires détaillant les différentes parties de la chaîne utilisée
// - n°1 : add_1
// - n°2 : projet
// - n°3 : id_sha1_user
// $_SESSION["index"][2] représente l'identifiant de l'utilisateur actuel
?>

<script>
    // Fonction pour diviser une chaîne par "__" et retourner un tableau de valeurs
    function afficherValeursFormattees(chaine) {
        const valeurs = chaine.split("__"); // Séparation de la chaîne par "__"
        return valeurs; // Retourne le tableau de valeurs
    }

    // Fonction principale appelée au clic de l'élément HTML
    function general_send(_this) {
        // Exemple de la structure de l'élément sur lequel on a cliqué
        // <div id="" onclick="general_send(this)" class="add_1__root__id_sha1_user__Valeur_a_ajouter__<?php echo $_SESSION["index"][2] ?>">
        //      ADD
        //  </div>

        // Récupération et formatage des valeurs de la classe de l'élément cliqué
        const texteFormatte = afficherValeursFormattees(_this.className);
        console.log(texteFormatte); // Affichage des valeurs formatées dans la console



        const texteFormatte2 = afficherValeursFormattees(_this.id);



        // Création d'une instance de la classe 'Information' pour envoyer les données
        var ok = new Information("function/general.php");

        // Ajout de la première information (option00 est vide ici)
        ok.add("option00", "");

        // Si la première valeur existe, on l'ajoute à l'instance 'ok'

        // Répétition du processus pour chaque valeur possible (jusqu'à 8 valeurs)
        if (texteFormatte[1] != undefined) {
            ok.add("option0_2", texteFormatte[1]);
        }
        if (texteFormatte[2] != undefined) {
            ok.add("option1_1", texteFormatte[2]);
        }
        if (texteFormatte[3] != undefined) {
            ok.add("option1_2", texteFormatte[3]);
        }
        if (texteFormatte[4] != undefined) {
            ok.add("option2_1", texteFormatte[4]);
        }
        if (texteFormatte[5] != undefined) {
            ok.add("option2_2", texteFormatte[5]);
        }
        if (texteFormatte[6] != undefined) {
            ok.add("option3_1", texteFormatte[6]);
        }
        if (texteFormatte[7] != undefined) {
            ok.add("option3_2", texteFormatte[7]);
        }
        if (texteFormatte[0] != undefined) {
            ok.add("option0_1", texteFormatte[0]);
            if (texteFormatte2[0] == texteFormatte[0]) {


                var value = document.getElementById(texteFormatte2[1]).value;

                value.replace("'", "&#39");
                value.replace('"', "&quot");
                var new_val = "";
                for (var boucle = 0; boucle < value.length; boucle++) {
                    

                    switch (value[boucle]) {
                        case "'":
                           new_val = new_val+"&apos" ; 
                            break;
                        case '"':
                           new_val = new_val+"&quot" ; 
                            break;
                        default:
                        new_val = new_val+value[boucle] ;                         
                    }

                }
         
                ok.add("option1_2",new_val );

            }
        }


        console.log(ok.info()); // Affiche les informations collectées dans la console
        ok.push(); // Envoie les informations collectées vers le script PHP via la méthode 'push'
    }
</script>

<style>
    /* Style de la classe 'test1' qui contient les éléments flexibles */
    .test1 {
        display: flex;
        justify-content: space-around;
        /* Espace égal entre les éléments */
        background-color: black;
        /* Fond noir pour la section */
        transition: 1s all;
        /* Transition fluide pour toutes les propriétés */
    }

    /* Style pour les div à l'intérieur de la classe 'test1' */
    .test1 div {
        padding: 15px;
        color: green;
        /* Texte en vert */
        border: 1px solid rgba(255, 255, 255, 0.6);
        /* Bordure semi-transparente blanche */
    }

    /* Effet au survol des éléments */
    .test1 div:hover {
        background-color: white;
        /* Fond blanc au survol */
        transition: 1s all;
        /* Transition fluide */
        color: black;
        /* Changement de couleur du texte en noir */
        cursor: pointer;
        /* Curseur pointer pour indiquer une action */
    }

    /* Style pour le lien 'a' de la déconnexion */
    .test1 a {
        color: red;
        /* Lien rouge */
        text-decoration: none;
        /* Suppression de la décoration par défaut */
    }
</style>