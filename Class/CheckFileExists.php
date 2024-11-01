<?php
class CheckFileExists
{
    // Méthode pour vérifier si un fichier existe
    public static function CheckFileExists_($filePath)
    {
        return file_exists($filePath);
    }
}


/*
// Exemple d'utilisation
$path = "path/to/your/file.php";
if (CheckFileExists::checkFileExists($path)) {
    echo "The file exists.";
} else {
    echo "The file does not exist.";
}
    */

    ?>
