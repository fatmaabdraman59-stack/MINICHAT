<?php
// Paramètres de connexion à la base de données
$host = getenv('MYSQL_HOST');
$dbname = getenv('DATABASE');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour créer la table
    $sql = "
        CREATE TABLE IF NOT EXISTS chat (
            id INT AUTO_INCREMENT PRIMARY KEY,
            pseudo VARCHAR(50) NOT NULL,
            message TEXT NOT NULL,
            date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ";

    // Exécution de la requête
    $pdo->exec($sql);
    echo "Table 'chat' créée avec succès.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>