<?php
class Publication {
    private $publicationDate;

    public function __construct($publicationDate) {
        $timezone = new DateTimeZone('Europe/Paris');  // Définir le fuseau horaire
        $this->publicationDate = new DateTime($publicationDate, $timezone);
    }

    public function getDaysElapsed() {
        $timezone = new DateTimeZone('Europe/Paris');
        $currentDate = new DateTime('now', $timezone);
        $interval = $currentDate->diff($this->publicationDate);
        return $interval->days;
    }
}
/*
$publicationDate = '2024-10-19 14:38:10';
$publication = new Publication($publicationDate);

echo "Nombre de jours écoulés : " . $publication->getDaysElapsed();
*/
?>
