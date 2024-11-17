<?php
// Récupérer les données envoyées par le client
$input = json_decode(file_get_contents('php://input'), true);
$token = $input['token'] ?? null;

if (!$token) {
    echo json_encode(['success' => false, 'message' => 'Token manquant']);
    exit;
}

// Votre client ID Google
$clientId = 'VOTRE_CLIENT_ID';

// URL pour vérifier le token ID Google
$url = 'https://oauth2.googleapis.com/tokeninfo?id_token=' . $token;

// Récupérer les informations du token Google
$response = file_get_contents($url);
$payload = json_decode($response, true);

// Vérifiez si le payload contient les informations de l'utilisateur
if ($payload && isset($payload['sub'])) {
    // Récupérer les informations de l'utilisateur
    $userId = $payload['sub']; // ID unique Google
    $email = $payload['email'];
    $name = $payload['name'];

    // Connexion à votre base de données
    $pdo = new PDO('mysql:host=localhost;dbname=ma_base_de_donnees', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifiez si l'utilisateur existe déjà dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE google_id = :google_id");
    $stmt->execute(['google_id' => $userId]);

    if ($stmt->rowCount() > 0) {
        // L'utilisateur existe déjà
        $user = $stmt->fetch();
        echo json_encode([
            'success' => true,
            'message' => 'Utilisateur déjà inscrit',
            'name' => $user['nom']
        ]);
    } else {
        // Inscrire un nouvel utilisateur
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (google_id, email, nom) VALUES (:google_id, :email, :nom)");
        $stmt->execute([
            'google_id' => $userId,
            'email' => $email,
            'nom' => $name
        ]);

        echo json_encode([
            'success' => true,
            'message' => 'Inscription réussie',
            'name' => $name
        ]);
    }
} else {
    // Si le token est invalide
    echo json_encode(['success' => false, 'message' => 'Token invalide']);
}
