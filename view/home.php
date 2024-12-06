<?php
session_start();

class DivGenerator
{
    public $name;
    public $function_name;
    public $className_array;
    public $className_array_total;
    public $function_split ;
    public $dbname ; 

    function __construct($dbname,$name, $function_name,$function_split)
    {
        $this->dbname = $dbname;
        $this->name = $name;
        $this->function_name = $function_name;
        $this->function_split = $function_split;        
    }

    function set_className($nom_class, $parametre)
    {


        $nom_class = htmlspecialchars($this->function_split.$nom_class.$this->function_split);
        $parametre = htmlspecialchars($parametre);
        $this->className_array[] = [$nom_class, $parametre]; // Ajoute une nouvelle ligne avec 2 éléments
    }

    function className_array()
    {

        $name=$this->function_name.$this->function_split.$this->dbname ; 
        $count = count($this->className_array);

        for ($a = 0; $a < $count; $a++) {
            for ($b = 0; $b < $count; $b++) {
                $name = $name .$this->className_array[$a][$b] ;
            }
        }
        $this->className_array_total = $name ;     
    }

    // Méthode pour générer le div
    public function generateDiv()
    {
        $divHtml = '<div id="' . $this->name . '" onclick="' . $this->function_name . '(this)" class="' .$this->className_array_total . '">ADD</div>';

        return $divHtml; // Retourne le code HTML généré
    }
}

// Instanciation de la classe DivGenerator
 

// $divGenerator = new DivGenerator("root","div_generator", "add_1","__");
// $divGenerator = new DivGenerator("root","div_generator", "add_1","__");


$divGenerator = new DivGenerator("root","div_generator", "update_1","__");
//
$divGenerator->set_className("id_sha1_user", "");
// Ligne n°1 demande la ou je veux ajouter l'information 
// Ligne n°2 demande les information la ou les cherchercherche je demande   id_user quand il est egale a 168 
// effectuer le changement de la ligne n°1 
$divGenerator->set_className("id_user", "168");

 
// Dans cet exemple je demande la table  id_sha1_user 

// root  correspond au nom de la table  
// div_generator c'est le nom de l'identifiant qu'on va génerer 
// add_2  nom de la
// __ correspond  a l'element qui permet de faire la séparation entre chaque element rajoute dans les class

$divGenerator->className_array();



// Appel direct de la méthode pour générer le div
 echo  $divGenerator->generateDiv(); // Cela va directement afficher le div généré

 // besoin de faire echo pour afficher le retur de la class 
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Div Dynamique</title>
    <script>
        // Fonction pour diviser une chaîne par "__" et retourner un tableau de valeurs
        function afficherValeursFormattees(chaine) {
            const valeurs = chaine.split("__");
            return valeurs; // Retourne le tableau des valeurs obtenues
        }

        // Fonction principale appelée au clic de l'élément HTML
        function add_2(_this) {
            // Récupération et formatage des valeurs de la classe de l'élément cliqué
            const texteFormatte = afficherValeursFormattees(_this.className);
            console.log(texteFormatte); // Affichage des valeurs formatées dans la console

            // Création d'une instance de la classe 'Information' pour envoyer les données
            var ok = new Information("function/general.php");

            // Ajout de la première information (option00 est vide ici)
            ok.add("option00", "");

            // Si la première valeur existe, on l'ajoute à l'instance 'ok'
            if (texteFormatte[0] != undefined) {
                ok.add("option0_1", texteFormatte[0]);
            }
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

            console.log(ok.info()); // Affiche les informations collectées dans la console
            ok.push(); // Envoie les informations collectées vers le script PHP via la méthode 'push'
        }






                // Fonction principale appelée au clic de l'élément HTML
                function add_1(_this) {
            // Récupération et formatage des valeurs de la classe de l'élément cliqué
            const texteFormatte = afficherValeursFormattees(_this.className);
            console.log(texteFormatte); // Affichage des valeurs formatées dans la console

            // Création d'une instance de la classe 'Information' pour envoyer les données
            var ok = new Information("function/general.php");

            // Ajout de la première information (option00 est vide ici)
            ok.add("option00", "");

            // Si la première valeur existe, on l'ajoute à l'instance 'ok'
            if (texteFormatte[0] != undefined) {
                ok.add("option0_1", texteFormatte[0]);
            }
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

            console.log(ok.info()); // Affiche les informations collectées dans la console
            ok.push(); // Envoie les informations collectées vers le script PHP via la méthode 'push'
        }



            // Fonction principale appelée au clic de l'élément HTML
    function update_1(_this) {
        // Exemple de la structure de l'élément sur lequel on a cliqué
        // <div id="" onclick="update_1(this)" class="add_1__root__id_sha1_user__Valeur_a_ajouter__43">
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
</head>

<body>

    <!-- Affichage du div généré par PHP -->
    <?php echo $generatedDiv; ?>

</body>

</html>