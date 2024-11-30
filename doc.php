<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation - DatabaseHandler</title>
    <style>
        /* Style global */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        header {
            background-color: #1f2937;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2rem;
            margin: 0;
        }

        header p {
            font-size: 1rem;
            margin: 5px 0 0;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #1f2937;
        }

        h3 {
            font-size: 1.2rem;
            margin-top: 20px;
            color: #4b5563;
        }

        p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        pre {
            background-color: #f6f8fa;
            border-left: 4px solid #1f2937;
            padding: 15px;
            border-radius: 4px;
            font-size: 0.95rem;
            overflow: auto;
        }

        code {
            font-family: Consolas, monospace;
            color: #d14;
        }

        .section {
            margin-bottom: 30px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            font-size: 0.9rem;
            color: #6b7280;
        }

        footer a {
            color: #1f2937;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>Documentation de la Classe <code>DatabaseHandler</code></h1>
    <p>Gestion simplifiée des bases de données avec PHP</p>
</header>
<main>
    <div class="section">
        <h2>Introduction</h2>
        <p>La classe <code>DatabaseHandler</code> permet de gérer les bases de données MySQL de manière simple et efficace, en offrant des méthodes pour :</p>
        <ul>
            <li>Créer et vérifier l'existence de bases de données et tables</li>
            <li>Récupérer des données ou des structures de tables</li>
            <li>Gérer des requêtes SQL dynamiques</li>
        </ul>
    </div>

    <div class="section">
        <h2>Méthodes et Exemples</h2>

        <!-- Exemple pour __construct -->
        <h3>1. <code>__construct($username, $password)</code></h3>
        <p>Initialise une connexion avec le serveur MySQL. Si la base de données portant le nom de l'utilisateur n'existe pas, elle est créée.</p>
        <pre><code>// Initialisation
$handler = new DatabaseHandler('root', 'password123');

// Vérifier la connexion
if (!$handler->get_verif()) {
    echo "Échec de connexion au serveur MySQL.";
}
</code></pre>

        <!-- Exemple pour getTables -->
        <h3>2. <code>getTables($database)</code></h3>
        <p>Récupère toutes les tables de la base de données spécifiée.</p>
        <pre><code>// Obtenir les tables d'une base de données
$handler->getTables('nom_de_la_base');
print_r($handler->get_tableList());</code></pre>

        <!-- Exemple pour getListOfTables_Child -->
        <h3>3. <code>getListOfTables_Child($tableName)</code></h3>
        <p>Récupère les colonnes d'une table spécifique.</p>
        <pre><code>// Récupérer les colonnes d'une table
$handler->getListOfTables_Child('nom_table');
print_r($handler->get_tableList_child());</code></pre>

        <!-- Exemple pour set_column_names -->
        <h3>4. <code>set_column_names($column_names)</code></h3>
        <p>Ajoute des noms de colonnes à la liste pour la création de tables.</p>
        <pre><code>// Ajouter des colonnes pour une table
$handler->set_column_names(['id', 'nom', 'prenom']);
print_r($handler->column_names);</code></pre>

        <!-- Exemple pour get_username -->
        <h3>5. <code>get_username()</code></h3>
        <p>Renvoie le nom d'utilisateur utilisé pour la connexion MySQL.</p>
        <pre><code>// Obtenir le nom d'utilisateur
echo $handler->get_username();</code></pre>

        <!-- Exemple pour get_verif -->
        <h3>6. <code>get_verif()</code></h3>
        <p>Indique si la connexion avec le serveur MySQL est établie.</p>
        <pre><code>// Vérifier la connexion
if ($handler->get_verif()) {
    echo "Connexion réussie.";
} else {
    echo "Échec de connexion.";
}</code></pre>
    </div>
</main>
<footer>
    <p>Documentation générée automatiquement. Consultez le code source pour plus de détails.</p>
</footer>
</body>
</html>
