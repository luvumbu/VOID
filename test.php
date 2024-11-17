<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutons en Cards</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="button-container">
        <div class="card">
            <button class="card-button">Créer un formulaire</button>
        </div>
        <div class="card">
            <button class="card-button">Voir les formulaires</button>
        </div>
    </div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f7f7f7;
}

.button-container {
    display: flex;
    gap: 20px;
}

.card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 200px;
    text-align: center;
    transition: transform 0.3s ease;
}

.card-button {
    background-color: #007bff;
    color: white;
    font-size: 16px;
    padding: 20px;
    width: 100%;
    border: none;
    cursor: pointer;
    border-radius: 0;
    transition: background-color 0.3s, transform 0.3s;
}

.card-button:hover {
    background-color: #0056b3;
    transform: translateY(-5px);
}

.card:hover {
    transform: translateY(-10px);
}

</style>