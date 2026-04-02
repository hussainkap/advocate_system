<?php

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $config = require BASE_PATH . '/config/database.php';

        $this->pdo = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['user'],
            $config['pass']
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->pdo;
    }
}