<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Informations de connexion à la base de données
    $host = 'localhost';  // Hôte de la base de données
    $dbname = 'root';  // Nom de la base de données (assurez-vous de changer ceci avec votre vrai nom de base de données)
    $username = 'root';  // Nom d'utilisateur pour la connexion
    $password = 'root';  // Mot de passe pour la connexion

    try {
        // Création de la connexion PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les informations de la table principale
        $mainTableName = isset($_POST['main_table_name']) ? $_POST['main_table_name'] : '';

        // Vérification si le nom de la table est vide
        if (empty($mainTableName)) {
            echo "Le nom de la table principale est requis.";
            exit;
        }

        // Récupérer les colonnes et leurs types
        $columnNames = isset($_POST['column_name']) ? $_POST['column_name'] : [];
        $columnTypes = isset($_POST['column_type']) ? $_POST['column_type'] : [];

        // Si aucune colonne n'est ajoutée
        if (count($columnNames) !== count($columnTypes)) {
            echo "Le nombre de colonnes ne correspond pas au nombre de types de données.";
            exit;
        }

        // Construction de la requête SQL pour créer la table
        $sql = "CREATE TABLE `$mainTableName` (";

        // Ajouter les colonnes à la requête
        foreach ($columnNames as $index => $name) {
            $type = $columnTypes[$index];
            $sql .= "`$name` $type, ";
        }

        // Supprimer la dernière virgule
        $sql = rtrim($sql, ', ');

        // Ajouter la parenthèse de fin
        $sql .= ");";

        // Afficher la requête SQL générée pour vérification
        echo "<pre>$sql</pre>";

        // Exécuter la requête SQL pour créer la table
        $pdo->exec($sql);
        echo "La table a été créée avec succès.";
    } catch (PDOException $e) {
        // Si une erreur se produit lors de la connexion ou de l'exécution de la requête
        echo "Erreur de connexion ou d'exécution : " . $e->getMessage();
    }
}
?>

<?php
// Afficher les données pour vérifier (facultatif)
var_dump($columnNames);
echo $mainTableName;

// Le contenu du fichier PHP que vous voulez créer
$phpContent = "<?php \n";

// Construction de la requête de base avec le nom de la table
$phpContent .= '$req_sql_0 = \'SELECT * FROM `' . $mainTableName . '` WHERE 1\';';





 



;
$phpContent .= "\n";

// Parcours des noms de colonnes et ajout dynamique dans le code PHP

$i = 0;
foreach ($columnNames as $columnName) {


    $phpContent .= '$req_sql_url_'.$columnName.' = \'SELECT * FROM `' . $mainTableName . '` WHERE  `'.$columnName.'` \';';
    $phpContent .= "\n";



    $phpContent .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_url_'.$columnName.', "' . $columnName . '");
$' . $columnName . '_req_sql_url_' .$columnName.'_'. $i . ' = $databaseHandler->tableList_info;
';



$phpContent .= '
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql_' . $i . ', "' . $columnName . '");
$' . $columnName . '_req_sql_' . $i . ' = $databaseHandler->tableList_info;
';











}
$i = 0;

$phpContent .= "\n?>";

// Définir le chemin et le nom du fichier à créer
$filePath = 'all_req/general_req.php';

// Créer ou ouvrir le fichier en mode écriture
$file = fopen($filePath, 'w');

// Vérifier si le fichier a bien été ouvert
if ($file) {
    // Écrire le contenu dans le fichier
    fwrite($file, $phpContent);

    // Fermer le fichier après l'écriture
    fclose($file);
    echo "Le fichier a été créé avec succès.";
} else {
    echo "Impossible d'ouvrir le fichier pour l'écriture.";
}
?>
