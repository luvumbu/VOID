<?php
error_reporting(E_ERROR | E_PARSE);
class DatabaseHandler
{
    public $servername = "localhost";
    public $username;
    public $password;
    public $verif = true;
    public $connection;
    public $connection_child;
    public $tableList = array();
    public $tableList_child = array();
    public $tableList_child2 = array();
    public $tableList_info = array();
    public $tableList_info2 = [];
    public $table_name_and_child;

    public $table_name_general;
    public $sql_general;

    public $mysql_general;
    public $table_general;




    public $column_names = array();

    public $column_types = array();
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->connection = new mysqli($this->servername, $this->username, $this->password);
        if ($this->connection->connect_error) {
            $this->verif = false;
        } else {
            // Create connection
            $conn = new mysqli($this->servername, $this->username, $this->password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $name_bdd = $this->username;

            // Create database
            $sql = "CREATE DATABASE $name_bdd";
            if ($conn->query($sql) === TRUE) {
            } else {
                //  echo "Error creating database: " . $conn->error;
            }

            $conn->close();
        }
    }

    function function_affiche_all()
    {
      

 
   
    }

    function set_mysql_general($mysql_general)
    {

        $this->mysql_general = $mysql_general;
    }

    function set_table_general($table_general)
    {
        $this->table_general = $table_general;
    }

    function set_table_name_general($table_name_general)
    {
        $this->table_name_general = $table_name_general;
        return $this->table_name_general;
    }
    function get_table_name_general()
    {

        return $this->table_name_general;
    }

    function set_sql_general($sql_general)
    {

        $this->sql_general  = $sql_general;
    }



    function existance_table($table_a_verifier)
    {
        // Connexion à la base de données
        $connexion = new mysqli($this->servername, $this->username, $this->password, $this->username);

        // Vérification de la connexion
        if ($connexion->connect_error) {
            die("Erreur de connexion à la base de données : " . $connexion->connect_error);
        }

        // Nom de la table à vérifier


        // Requête SQL pour vérifier l'existence de la table
        $sql = "SHOW TABLES LIKE '$table_a_verifier'";
        $resultat = $connexion->query($sql);

        // Vérification du résultat
        if ($resultat->num_rows > 0) {
            return "1";
        } else {
            return "0";
        }

        // Fermeture de la connexion
        $connexion->close();
    }

    function getTables()
    {
        if ($this->verif) {
            $this->connection->select_db($this->username);
            if ($this->connection->error) {
                return;
            }
            $sql = "SHOW TABLES";
            $result = $this->connection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    array_push($this->tableList, $row[0]);
                }
            } else {
                $this->tableList = false;
            }
            $this->connection->close();
        }

        return $this->tableList;
    }
    function getListOfTables()
    {

        // Donne la liste de tables dans la Bdd
        // ont peut faire aussi
        //var_dump($this->tableList) ;

        return $this->tableList;
    }


    function general_dynamique()
    {
        $this->getListOfTables_Child($this->table_general);
        $this->getDataFromTable2X($this->mysql_general);
        $this->get_dynamicVariables();
    }
    function getListOfTables_Child($tableName)
    {
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_errno) {
                exit();
            }
            $query = "SHOW COLUMNS FROM $tableName";
            $result = $this->connection_child->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($this->tableList_child, $row['Field']);
                }
            }
            $this->connection_child->close();
        }

        return $this->tableList_child;
    }


    function test()
    {








        /*
        getListOfTables_Child
        getDataFromTable2X
        get_dynamicVariables

        */
    }

    function getListOfTables_Child2($tableName)
    {
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_errno) {
                exit();
            }
            $query = "SHOW COLUMNS FROM $tableName";
            $result = $this->connection_child->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($this->tableList_child2, $row['Field']);
                }
            }
            $this->connection_child->close();
        }
    }
    function getDataFromTable($sql, $info_recherche)
    {
        $this->tableList_info = array();
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_error) {
                die("Connection failed: " . $this->connection_child->connect_error);
            }
            $result = $this->connection_child->query($sql);
            if ($result->num_rows > 0) {
                $data = array();
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                foreach ($data as $row) {
                    array_push($this->tableList_info, $row[$info_recherche]);
                }
            }
            $this->connection_child->close();
        }
        $this->tableList_info2[] = $this->tableList_info;
    }


    function getDataFromTable2X($sql)
    {
        foreach ($this->tableList_child as $row) {
            $this->getDataFromTable($sql, $row);
        }
    }
    function action_sql($sql)
    {
        $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
        if ($this->connection_child->connect_error) {
            die("Connection failed: " . $this->connection_child->connect_error);
        }
        if ($this->connection_child->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection_child->error;
        }
        $this->connection_child->close();
    }
    function add_table($nom_table)
    {
        if (count($this->column_names) !== count($this->column_types)) {
            die("Erreur : les tableaux de noms de colonnes et de types de données doivent avoir la même longueur.");
        }
        $columns_definitions = array();
        for ($i = 0; $i < count($this->column_names); $i++) {
            $columns_definitions[] = "{$this->column_names[$i]} {$this->column_types[$i]}";
        }
        $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);

        if ($this->connection_child->connect_error) {
            die("Échec de la connexion : " . $this->connection_child->connect_error);
        }
        $sql = "CREATE TABLE $nom_table (
            " . implode(", ", $columns_definitions) . "
        )";
        if ($this->connection_child->query($sql) === TRUE) {
            //echo "Table clients créée avec succès.";
        } else {
            echo "Erreur lors de la création de la table : " . $this->connection_child->error;
        }
        $this->connection_child->close();
    }
    function existe_table($dbname)
    {
        // Connexion à MySQL en utilisant les informations d'identification
        // Vérification de la connexion
        if ($this->connection->connect_error) {
            die("La connexion a échoué : " . $this->connection->connect_error);
        }
        // Nom de la base de données à vérifier
        // Requête pour vérifier si la base de données existe
        $sql = "SHOW DATABASES LIKE '$dbname'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return 0;
        }
        // Fermer la connexion
        $this->connection->close();
    }
    function set_column_names($column_names)
    {
        array_push($this->column_names, $column_names);
    }
    function set_column_types($column_types)
    {
        array_push($this->column_types, $column_types);
    }
    function get_servername()
    {
        return $this->servername;
    }
    function get_username()
    {
        return $this->username;
    }
    function get_password()
    {
        return $this->password;
    }
    function get_verif()
    {
        return $this->verif;
    }
    function get_connection()
    {
        return $this->connection;
    }
    function get_connection_child()
    {
        return $this->connection_child;
    }
    function get_tableList()
    {
        return $this->tableList;
    }
    function get_tableList_child()
    {
        return $this->tableList_child;
    }
    function get_tableList_info()
    {
        return $this->tableList_info;
    }

    function get_dynamicVariables()
    {
        global $dynamicVariables; // Rend la variable accessible globalement
        $dynamicVariables = []; // Initialisation

        foreach ($this->tableList_child as $index => $nom) {
            if (isset($this->tableList_info2[$index])) {
                $dynamicVariables[strtolower($nom)] = $this->tableList_info2[$index];
            }
        }

        /*
       // exemple utilisation 
        $databaseHandler->get_dynamicVariables();
        // Utilisation des données dynamiques
       // global $dynamicVariables;
       // var_dump($dynamicVariables['id_sha1_user']);

        */




        /*

        // autre méthode 
// Création des variables dynamiques
foreach ($databaseHandler->tableList_child as $index => $nom) {
    if (isset($databaseHandler->tableList_info2[$index])) { // Vérifie si un fruit existe à cet index
        ${strtolower($nom)} = $databaseHandler->tableList_info2[$index]; // Crée une variable avec le nom en minuscule
    }
}




var_dump($id_sha1_user );

*/
    }


    function get_dynamicVariables_general()
    {
        global $dynamicVariables; // Rend la variable accessible globalement
        $dynamicVariables = []; // Initialisation

        foreach ($this->tableList_child as $index => $nom) {
            if (isset($this->tableList_info2[$index])) {
                $dynamicVariables[strtolower($nom)] = $this->tableList_info2[$index];
            }
        }
    }
}



/*
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler->tableList_info;
*/


//// fonction ok 22/07/2024  X0-


// initialisaton de la classe
/*


// demande la liste de table contenant root 

// fonction ok 22/07/2024  X1-
//var_dump($databaseHandler->getListOfTables());
// fonction ok 22/07/2024  X1_


//$databaseHandler->getListOfTables_Child("information_user");
// Donne la liste des enfanrt dans la table liste_log3
// fonction ok 22/07/2024  X2-
//var_dump($databaseHandler->tableList_child);
// fonction ok 22/07/2024  X2_
// affiche les element 
 
$databaseHandler->getDataFromTable("SELECT * FROM `information_user` WHERE 1 LIMIT 1","information_user_login");
// recherche des element  


//var_dump($databaseHandler->tableList_info);

//var_dump($databaseHandler->tableList);

//var_dump($databaseHandler->get_tableList());

 


 
//  creation des tables  


// fonction ok 22/07/2024  X3-
$databaseHandler->set_column_names("id_x");
$databaseHandler->set_column_names("nom");
$databaseHandler->set_column_names("prenom");
$databaseHandler->set_column_names("email");
$databaseHandler->set_column_names("date_inscription");



$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
$databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
$databaseHandler->set_column_types("VARCHAR(50)");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("undeuxtroisquatre");

// fonction ok 22/07/2024  X3_





// fonction ok 22/07/2024  X4-
$databaseHandler->action_sql("INSERT INTO `undeuxtroisquatre` (nom) VALUES ('nomtest')") ;
// fonction ok 22/07/2024  X4_





// fonction ok 22/07/2024  x5-

//$databaseHandler->getDataFromTable('SELECT * FROM `undeuxtroisquatre` WHERE 1',"nom");

//var_dump($databaseHandler->tableList_info) ;  
// fonction ok 22/07/2024  x5-



*/
// fonction ok 22/07/2024  X0_





// Initialisation de la classe avec un utilisateur et un mot de passe
//var_dump($databaseHandler->tableList_info2) ;
//var_dump($databaseHandler->tableList_child) ; 

/*
var_dump($databaseHandler->tableList_info2) ;
*/

/*
foreach ($databaseHandler->tableList_child as $row) {
    
    echo "<br/>" ; 

    echo $row ; 

    $variableName =  $row; // Construction du nom de la variable
    $$variableName = "Valeur de la variable $a"; // Création d'une variable dynamique
    echo "$variableName : " . $$variableName . "<br>";
}
*/







/*
// Création des variables dynamiques
foreach ($databaseHandler->tableList_child as $index => $nom) {
    if (isset($databaseHandler->tableList_info2[$index])) { // Vérifie si un fruit existe à cet index
        ${strtolower($nom)} = $databaseHandler->tableList_info2[$index]; // Crée une variable avec le nom en minuscule
    }
}


var_dump($id_sha1_user );

*/

// Utilisation des données dynamiques
//global $dynamicVariables;


/*
if (isset($dynamicVariables['id_sha1_user'])) {
    var_dump($dynamicVariables['id_sha1_user']);
} else {
    echo "La variable 'id_sha1_user' n'existe pas.";
}


if (isset($dynamicVariables['id_user'])) {
    var_dump($dynamicVariables['id_user']);
} else {
    echo "La variable 'id_user' n'existe pas.";
}
*/






/*
$username = "root";
$password = "root";
$nom_table = "projet";

$databaseHandler = new DatabaseHandler($username, $password);

$req_sql = "SELECT * FROM `$nom_table` WHERE 1";

$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
var_dump($dynamicVariables['id_sha1_projet']);

*/




/*

// Exemple d'utilisation n°1 
 // Initialisation
$handler = new DatabaseHandler('root', 'root');

// Vérifier la connexion
if (!$handler->get_verif()) {
    echo "Échec de connexion au serveur MySQL.";
}
else {
 // affiche message de succes ici 
 // exemple echo 'connexion reussi' ;    
}
 
*/

/*
// Exemple d'utilisation n°2 
$handler = new DatabaseHandler('root', 'root');
echo $handler->verif;
*/
// si $handler->verif; ==1 connexion reussi si non echec de la connexion 
// une fois connecter nous pouvons utiliser les fonction de class 



/* 
// Exemple d'utilisation n°3
$handler = new DatabaseHandler('root', 'root');
$existance_table_ = $handler->existance_table("root");
echo  $existance_table_ ; 
// Pour cette methode elle retourne une valeur 0 ou 1 
*/


/* 
// Exemple d'utilisation n°4
$handler = new DatabaseHandler('root', 'root'); 
$getTables_ =  $handler->getTables() ;
//exemple n°4.1 echo var_dump($getTables_) ;  
// Boucle sur la variable 
foreach ($getTables_  as $key ) {
   // echo $key.'<br/>' ; 
}
//exemple n°4.2 echo var_dump($getTables_)  bouble avec un for ;  
for ($i=0; $i <count($getTables_ ) ; $i++) { 
   echo $getTables_[$i] ; 
   echo '<br/>' ; 
}
*/


/*
// Exemple d'utilisation n°5
$handler = new DatabaseHandler('root', 'root'); 
$getListOfTables_Child =  $handler->getListOfTables_Child("root") ;
//exemple n°4.1 echo var_dump($getListOfTables_Child) ;  
// Boucle sur la variable 
foreach ($getListOfTables_Child  as $key ) {
    echo $key.'<br/>' ; 
}
//exemple n°4.2 echo var_dump($getListOfTables_Child)  bouble avec un for ;  
for ($i=0; $i <count($getListOfTables_Child ) ; $i++) { 
   echo $getListOfTables_Child[$i] ; 
   echo '<br/>' ; 
}
*/




/*
// Exemple d'utilisation n°6
// Nom de la table 
// puis de la colllone qu'on voudrais afficher
$nom_table = "root";
// nom de la table

$databaseHandler = new DatabaseHandler("root", "root");

$req_sql = "SELECT * FROM `$nom_table` WHERE 1";

$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
var_dump($dynamicVariables['id_sha1_user']);

// cet exemple permet de voir la liste total des element efant 
// avec la valeur detaille sans perte de performance 
 
 */







// Exemple d'utilisation n°6
// Nom de la table 
// puis de la colllone qu'on voudrais afficher
// nom de la table

$databaseHandler = new DatabaseHandler("root", "root");

$req_sql = "SELECT * FROM `root` WHERE 1";

/*
 
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
 
 */





/*
 // Exemple d'utilisation n°7 
 // cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
 // demad
$databaseHandler->set_mysql_general("projet_img");
// nom table + mysql+ connoles demande

$databaseHandler->set_table_general("SELECT * FROM `projet_img` WHERE 1");


$databaseHandler->general_dynamique();
var_dump($dynamicVariables['id_projet_img_auto']);
 
// cet exemple permet de voir la liste total des element efant 
// avec la valeur detaille sans perte de performance 

*/





// Exemple d'utilisation n°8
// cet exemple pemmet de dnner le nom d'une table et de faire une boucle 
// demad
$databaseHandler->set_mysql_general("SELECT * FROM `root` WHERE 1");
// nom table + mysql+ connoles demande

$databaseHandler->set_table_general("root");


$databaseHandler->general_dynamique();
var_dump($dynamicVariables['id_user']);
 



 
 
