 <?php
function validateEmail($email) {
    // Expression régulière pour vérifier le format d'une adresse e-mail
    $emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

    // Teste si l'email correspond au format
    return preg_match($emailRegex, $email);
}

$activation = time() ; 
$SERVER_NAME =  $_SERVER['SERVER_NAME'];
   // Adresse e-mail de destination
   $to = $input_1;
   // Exemple d'utilisation
$emailInput = $to;

if (validateEmail($emailInput)) {

 
   
   // Sujet de l'e-mail
   $subject = 'Bienvenue sur '.$SERVER_NAME.'';
   
   // Message stylé avec HTML et CSS inline
   $message = '
   <html>
   <head>
     <title>Bienvenue sur '.$SERVER_NAME.'</title>
     <style>
       body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: black;
       }
       .container {
         width: 100%;
         max-width: 600px;
         margin: 0 auto;
         background-color: #ffffff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       }
       .header {
         background-color: black;
         color: white;
         padding: 10px 0;
         text-align: center;
         border-radius: 8px 8px 0 0;
       }
       .header h1 {
         margin: 0;
       }
       .content {
         margin: 20px 0;
         font-size: 16px;
         line-height: 1.6;
         color: #333333;
       }
       .footer {
         text-align: center;
         font-size: 12px;
         color: #888888;
         margin-top: 20px;
       }
       .btn {
         display: inline-block;
         padding: 10px 20px;
         color: white;
         background-color: black;
         text-decoration: none;
         border-radius: 5px;
         font-size: 16px;
         margin-top: 20px;
       }
     </style>
   </head>
   <body>
     <div class="container">
       <div class="header">
         <h1>Bienvenue sur '.$SERVER_NAME.'</h1>
       </div>
       <div class="content">
         <p>Bonjour,</p>
         <p>Merci de vous être inscrit sur '.$SERVER_NAME.'. Nous sommes heureux de vous compter parmi nous.</p>
         <p>Pour finaliser votre inscription, veuillez cliquer sur le bouton ci-dessous afin d\'activer votre compte :</p>
         <a href="'.$SERVER_NAME.'/activation.php/'.$activation.'" class="btn">Activer votre compte</a>
         <p>Pour toute question ou assistance, n\'hésitez pas à nous contacter sur support@'.$SERVER_NAME.' .</p>
         <p>Cordialement,</p>
         <p><strong>L\'équipe '.$SERVER_NAME.'</strong></p>
       </div>
       <div class="footer">
         <p>&copy; 2024 '.$SERVER_NAME.' - Tous droits réservés</p>
       </div>
     </div>
   </body>
   </html>
   ';
   
   // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
   $headers = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
   // En-têtes supplémentaires (facultatif)
   $headers .= 'From: support@' .$SERVER_NAME. "\r\n";
   $headers .= 'Reply-To: support@' .$SERVER_NAME. "\r\n";
   
   // Envoi de l'e-mail
   if(mail($to, $subject, $message, $headers)) {
       echo 'E-mail envoyé avec succès.';
   } else {
       echo 'Échec de l\'envoi de l\'e-mail.';
   }
 



 
   echo "L'adresse e-mail est valide.";
  } else {
    $_SESSION["session_info"] = "Adresse mail incorrect" ;

    $_SESSION["session_info_coumpt"] = 1 ;  
  }
 




   ?>