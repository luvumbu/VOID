<?php
function delete_file($file_path) {
    // Vérifie si le fichier existe
    if (file_exists($file_path)) {
        // Tente de supprimer le fichier
        if (unlink($file_path)) {
            echo "The file '$file_path' was successfully deleted.";
        } else {
            echo "An error occurred while deleting the file '$file_path'.";
        }
    } else {
        echo "The file '$file_path' does not exist.";
    }
}


/*
// Exemple d'utilisation
$file_path = "path/to/your/file.txt";
delete_file($file_path);
*/
?>
