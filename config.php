<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('DB_FILE', __DIR__ . '/database.sqlite');

/*  Lazy-init de la base */
function db() : PDO {
    static $pdo = null;
    if (!$pdo) {
        $pdo = new PDO('sqlite:' . DB_FILE);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec(
            "CREATE TABLE IF NOT EXISTS bookings (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT, email TEXT, phone TEXT,
                event_type TEXT, message TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )"
        );
    }
    return $pdo;
}
