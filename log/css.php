<style>
body {
    background-color: #1a1a1a; /* Fond sombre */
    color: #e0e0e0; /* Texte clair pour un contraste élevé */
    font-family: 'Courier New', Courier, monospace; /* Police monospace pour l'aspect logs */
    margin: 20px;
    padding: 0;
}

.contenu_a_ajouter {
    background-color: #2b2b2b; /* Fond légèrement plus clair pour les entrées */
    border-left: 3px solid #00e676; /* Barre verte plus fine */
    padding: 12px 20px;
    margin-bottom: 10px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 2px 6px rgba(0, 255, 103, 0.2); /* Ombre légère */
    font-size: 14px; /* Taille de police réduite pour un style épuré */
    line-height: 1.4; /* Espacement des lignes pour la lisibilité */
}

.date_event, .mainTableName, .filex {
    margin: 3px 0; /* Réduction de l'espacement entre les lignes */
    word-wrap: break-word; /* Permet de couper les longues chaînes de texte */
    font-weight: 300; /* Police plus fine */
}

.date_event {
    font-size: 13px; /* Petite taille pour la date */
    color: #b0b0b0; /* Couleur plus douce pour la date */
}

.mainTableName {
    font-size: 15px;
    font-weight: 400; /* Texte légèrement plus gras pour les noms de table */
    color: #ffffff; /* Blanc pour une meilleure lisibilité */
}

.filex {
    font-size: 14px;
    font-style: italic;
    color: #a4a4a4; /* Gris clair pour les informations secondaires */
}

/* Effet de survol pour chaque élément */
.contenu_a_ajouter:hover {
    background-color: #333333; /* Change le fond au survol */
    border-left-color: #00e676; /* Reste la barre verte pour la continuité */
    box-shadow: 0 4px 10px rgba(0, 255, 103, 0.3); /* Ombre plus marquée */
}


</style>