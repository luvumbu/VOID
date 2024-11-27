<?php

class FileHandler
{
    private $filePath;
    private $directoryPath;
    private $content;
    private $fileArray;

    public function __construct($filePath, $content, &$fileArray)
    {
        $this->filePath = $filePath;
        $this->directoryPath = dirname($filePath);
        $this->content = $content;
        $this->fileArray = &$fileArray; // Référence au tableau
    }

    public function processFile()
    {
        try {
            $this->ensureDirectoryExists();
            $this->createFile();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br/>";
        }
    }

    private function ensureDirectoryExists()
    {
        if (!is_dir($this->directoryPath)) {
            if (mkdir($this->directoryPath, 0777, true)) {
                echo "Le dossier a été créé avec succès.<br/>";
            } else {
                throw new Exception("Impossible de créer le dossier.");
            }
        }
    }

    private function createFile()
    {
        $file = fopen($this->filePath, 'w');
        if ($file) {
            fwrite($file, $this->content);
            fclose($file);
            echo "Le fichier a été créé avec succès.<br/>";
            array_push($this->fileArray, $this->filePath);
        } else {
            throw new Exception("Impossible d'ouvrir le fichier pour l'écriture.");
        }
    }
}


?>