<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 


$directory = '../src/img/qr';

if (!is_dir($directory)) {
    // Le dossier n'existe pas, on le crée
    if (mkdir($directory, 0777, true)) {
        echo "Le dossier a été créé avec succès.";
    } else {
        echo "Erreur lors de la création du dossier.";
    }
} else {
    echo "Le dossier existe déjà.";
}


?>
 <style>
    body{
        margin: 0;
        padding: 0;
        background-color: black;
        
    }
 </style>   

<?php    

header("Access-Control-Allow-Origin: *");

require_once '../class/Creat_form.php';
require_once '../class/AsciiConverter.php';
require_once '../class/chercherIndex.php';
require_once '../class/IsLocal.php';
require_once '../class/give_url.php';
require_once '../class/tempsDeLecture.php' ; 
require_once '../class/path_config.php' ; 


$req_sql = 'SELECT * FROM `projet` WHERE 1';

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
$id_sha1_projet = $databaseHandler->tableList_info;



include "qrlib.php";    

    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';



for($a = 0 ; $a <  count($id_sha1_projet) ; $a ++ ) {



 

//$_POST["data"]


$data = $id_sha1_projet[$a]; 
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    
  
    


 
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    

      
    $filename = $PNG_TEMP_DIR.'.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($data)) { 
    
        //it's very important!
        if (trim($data) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = "../src/img/qr/".$id_sha1_projet[$a].'.png';
        QRcode::png( $_SERVER['SERVER_NAME']."/user.php/".$data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
 
    
 
        
    for($i=1;$i<=10;$i++)
 
 
    // benchmark
    QRtools::timeBenchmark();    

    $filename2 =  md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
 

}

?>



<meta http-equiv="refresh" content="0; url=../index.php">

</body>
</html>
