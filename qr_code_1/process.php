<?php
// Inclusion de la bibliothèque QR Code
include "qrlib.php";    

// Dossier temporaire pour stocker les fichiers PNG générés
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
$PNG_WEB_DIR = 'temp/';

// Création du dossier temporaire s'il n'existe pas
if (!file_exists($PNG_TEMP_DIR)) {
    mkdir($PNG_TEMP_DIR);
}

// Traitement des données du formulaire POST
$errorCorrectionLevel = 'L';
if (isset($_POST['level']) && in_array($_POST['level'], array('L','M','Q','H'))) {
    $errorCorrectionLevel = $_POST['level'];
}

$matrixPointSize = 4;
if (isset($_POST['size'])) {
    $matrixPointSize = min(max((int)$_POST['size'], 1), 10);
}

if (isset($_POST['data'])) { 
    // Validation des données
    if (trim($_POST['data']) == '') {
        die('Data cannot be empty! <a href="index.php">back</a>');
    }

    // Génération du fichier PNG
    $filename = $PNG_TEMP_DIR.md5($_POST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
    QRcode::png($_POST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);

    // Affichage du QR code généré
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';
} else {
    echo 'No data provided. <a href="index.php">Go back</a>';
}
