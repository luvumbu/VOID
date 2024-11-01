<?php 

function IsLocal()
{
  // Vérifiez le nom d'hôte pour détecter l'environnement local
  $hostname = $_SERVER['HTTP_HOST'];

  // Liste des domaines ou sous-domaines utilisés en local
  $local_domains = ['localhost', '127.0.0.1', 'dev.example.com'];

  return in_array($hostname, $local_domains);
}

?>