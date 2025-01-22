<?php
// Configuration de la base de données
$host = '10.1.1.10';         // Adresse IP de la base de données
$dbname = 'my_oumma_emails'; // Nom de la base de données
$username = 'root';          // Nom d'utilisateur pour la connexion
$password = '';              // Mot de passe pour la connexion
$port = 3306;

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'message' => 'Erreur de connexion à la base de données',
        'error' => $e->getMessage()
    ]);
    exit;
}

// Vérification de la méthode HTTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données POST
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';

    // Validation des données
    if (empty($email) || empty($role)) {
        http_response_code(400);
        echo json_encode(['message' => 'Email et rôle sont requis.']);
        exit;
    }

    // Insertion dans la base de données
    try {
        $stmt = $pdo->prepare("INSERT INTO registrations (email, role) VALUES (:email, :role)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':role', $role);
        $stmt->execute();

        echo json_encode(['message' => 'Enregistrement réussi !']);
        header("Location: index.php?success=true");
        exit;

    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode([
            'message' => 'Erreur lors de l\'enregistrement.',
            'error' => $e->getMessage()
        ]);
    }
} else {
    // Gestion des méthodes non autorisées
    http_response_code(405);
    echo json_encode(['message' => 'Méthode non autorisée.']);
}
?>
