<?php
class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new SQLite3(DB_FILE);
            $this->createTables();
        } catch (Exception $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    private function createTables() {
        // Tabla usuarios
        $this->connection->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT UNIQUE NOT NULL,
                password TEXT NOT NULL,
                is_admin INTEGER DEFAULT 0
            )
        ");

        // Tabla productos
        $this->connection->exec("
            CREATE TABLE IF NOT EXISTS products (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                description TEXT,
                price REAL NOT NULL,
                category TEXT NOT NULL
            )
        ");

        // Crear usuario admin por defecto
        $adminPassword = password_hash('admin', PASSWORD_DEFAULT);
        $this->connection->exec("
            INSERT OR IGNORE INTO users (username, password, is_admin) 
            VALUES ('admin', '$adminPassword', 1)
        ");
    }
}