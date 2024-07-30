<?php
// models/BaseModel.php
class BaseModel {
    protected $pdo;

    public function __construct() {
        $config = require __DIR__ . '/../config/database.php';
        $this->pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
    }
}
