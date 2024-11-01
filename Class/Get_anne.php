<?php
class Get_anne
{
    // Permet de te donner l'adresse qui est sous ce format 
    // exemple 
    // 2023-12-24 06:04:58
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_anne()
    {
        $debut = 0;
        $a = "";
        for ($xx = $debut; $xx < 4; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_mois()
    {
        $a = "";
        $debut = 5;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_jour()
    {
        $a = "";
        $debut = 8;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_heure_complet()
    {
        $a = "";
        $debut = 11;
        for ($xx = $debut; $xx < $debut + 8; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_heure()
    {
        $a = "";
        $debut = 11;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_minutes()
    {
        $a = "";
        $debut = 14;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_secondes()
    {
        $a = "";
        $debut = 17;
        for ($xx = $debut; $xx < $debut + 2; $xx++) {
            $a = $a . $this->name[$xx];
        }
        return $a;
    }

    function get_temps_depuis_publication()
    {
        // Définir le fuseau horaire sur Europe/Paris
        date_default_timezone_set('Europe/Paris');

        // Convertir la date de publication en timestamp
        $date_publication = strtotime($this->name);
        $date_actuelle = time();

        // Calculer la différence en secondes
        $difference = $date_actuelle - $date_publication;

        // Calculer les jours, heures et minutes
        $jours = floor($difference / (3600 * 24)); // Jours
        $heures = floor(($difference % (3600 * 24)) / 3600); // Heures restantes
        $minutes = floor(($difference % 3600) / 60); // Minutes restantes après avoir calculé les heures

        // Vérifier si plus de 12 mois
        $date_diff = date_diff(date_create($this->name), date_create());
        if ($date_diff->y >= 1) {
            return "Publié il y a " . $date_diff->y . " année(s)";
        } elseif ($date_diff->m >= 1) {
            return "Publié il y a " . $date_diff->m . " mois";
        }
        
        // Si plus de 24 heures
        if ($jours >= 1) {
            return "Publié il y a " . $jours . " jour(s)";
        }
        
        // Si moins d'une heure écoulée
        if ($heures < 1) {
            return "Publié il y a " . $minutes . " minute(s)";
        } else {
            return "Publié il y a " . $heures . " heure(s) et " . $minutes . " minute(s)";
        }
    }
}
 
?>