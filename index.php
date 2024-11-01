<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

require_once 'Class/CheckFileExists.php' ; 

    // Exemple d'utilisation
    $path = "path/to/your/file.php";
    if (CheckFileExists::CheckFileExists_($path)) {
        echo "The file exists.";
    } else {
        echo "The file does not exist.";
    }



    ?>
</body>

</html>