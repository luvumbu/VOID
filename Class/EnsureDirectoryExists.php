<?php 

// Fonction pour vérifier l'existence d'un dossier et le créer si nécessaire
function EnsureDirectoryExists($path) {
    if (is_dir($path)) {
        echo "Le dossier '$path' existe déjà.\n";
    } else {
        mkdir($path, 0777, true);
        echo "Dossier '$path' créé avec succès.\n";
    }
}
/*

<?php
// Tableau contenant les chemins de fichiers ou dossiers à vérifier
$source_file = array(
    "CRUDManager/",
    "CRUDManager/file.txt",
    "Toyota"
);

foreach ($source_file as $path) {
    ensureFileOrDirectoryExists($path);
}


*/




?>