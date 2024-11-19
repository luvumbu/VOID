<?php

class DirectoryManager
{
 
    public static function ensureDirectoryExists(string $filePath, int $permissions = 0777): bool
    {
        // Obtenir le chemin du dossier
        $directoryPath = dirname($filePath);

        // Vérifier si le dossier existe déjà
        if (is_dir($directoryPath)) {
            echo "Le dossier existe déjà.<br/>";
            return true;
        }

        // Créer le dossier
        if (mkdir($directoryPath, $permissions, true)) {
            echo "Le dossier a été créé avec succès.<br/>";
            return true;
        } else {
            echo "Impossible de créer le dossier.<br/>";
            return false;
        }
    }
}

?>