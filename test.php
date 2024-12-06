<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation Technique - DivGenerator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        main {
            padding: 20px;
            max-width: 900px;
            margin: auto;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        h1, h2, h3 {
            color: #4CAF50;
        }

        pre {
            background: #f4f4f9;
            border: 1px solid #ddd;
            padding: 10px;
            overflow-x: auto;
        }

        code {
            color: #d63384;
            font-family: monospace;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>

<body>

<header>
    <h1>Documentation Technique - Classe DivGenerator</h1>
</header>

<main>
    <section>
        <h2>Description Générale</h2>
        <p>
            La classe <code>DivGenerator</code> génère dynamiquement un élément HTML <code>&lt;div&gt;</code> avec des attributs personnalisés. 
            Ce div est configuré pour déclencher une fonction JavaScript au clic, permettant une interaction dynamique.
        </p>
    </section>

    <section>
        <h2>Attributs</h2>
        <ul>
            <li><code>$name</code> : Identifiant unique du div généré.</li>
            <li><code>$function_name</code> : Nom de la fonction JavaScript appelée lors d’un clic sur le div.</li>
            <li><code>$className_array</code> : Tableau associatif contenant les noms de classes et leurs paramètres.</li>
            <li><code>$className_array_total</code> : Chaîne concaténée des classes.</li>
            <li><code>$function_split</code> : Séparateur utilisé pour formater les noms des classes.</li>
            <li><code>$dbname</code> : Nom de la base de données ou autre contexte associé.</li>
        </ul>
    </section>

    <section>
        <h2>Méthodes</h2>
        <h3>__construct($dbname, $name, $function_name, $function_split)</h3>
        <p>Initialise une nouvelle instance de <code>DivGenerator</code>.</p>
        <pre>
function __construct($dbname, $name, $function_name, $function_split) {
    $this->dbname = $dbname;
    $this->name = $name;
    $this->function_name = $function_name;
    $this->function_split = $function_split;
}
        </pre>

        <h3>set_className($nom_class, $parametre)</h3>
        <p>Ajoute un élément au tableau <code>$className_array</code> après formatage sécurisé.</p>
        <pre>
function set_className($nom_class, $parametre) {
    $nom_class = htmlspecialchars($this->function_split.$nom_class.$this->function_split);
    $parametre = htmlspecialchars($parametre);
    $this->className_array[] = [$nom_class, $parametre];
}
        </pre>

        <h3>className_array()</h3>
        <p>Concatène les classes et paramètres pour former <code>$className_array_total</code>.</p>
        <pre>
function className_array() {
    $name = $this->function_name . $this->function_split . $this->dbname;
    $count = count($this->className_array);

    for ($a = 0; $a < $count; $a++) {
        for ($b = 0; $b < $count; $b++) {
            $name .= $this->className_array[$a][$b];
        }
    }
    $this->className_array_total = $name;
}
        </pre>

        <h3>generateDiv()</h3>
        <p>Génère le code HTML du div dynamique.</p>
        <pre>
function generateDiv() {
    $divHtml = '&lt;div id="' . $this->name . '" onclick="' . $this->function_name . '(this)" class="' . $this->className_array_total . '"&gt;ADD&lt;/div&gt;';
    return $divHtml;
}
        </pre>
    </section>

    <section>
        <h2>Exemple de Génération de Div</h2>
        <pre>
$divGenerator = new DivGenerator("root", "div_generator", "add_2", "__");
$divGenerator->set_className("id_sha1_user", "Valeur a ajouter");
$divGenerator->set_className("id_parent_user", "ok bebe");
$divGenerator->className_array();
echo $divGenerator->generateDiv();
        </pre>
    </section>

    <section>
        <h2>JavaScript</h2>
        <p>Le script JS suivant gère les interactions au clic sur le div :</p>
        <pre>
function afficherValeursFormattees(chaine) {
    return chaine.split("__");
}

function add_2(_this) {
    const valeurs = afficherValeursFormattees(_this.className);
    console.log(valeurs);
    
    var info = new Information("function/general.php");
    valeurs.forEach((valeur, index) => {
        info.add(`option${index}`, valeur);
    });
    info.push();
}
        </pre>
    </section>

</main>

<footer>
    <p>&copy; 2024 - Documentation Technique de DivGenerator</p>
</footer>

</body>

</html>
