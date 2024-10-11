<?php
$host = '127.0.0.1';
phpinfo();
$db   = 'teste'; // O nome do seu banco de dados
$user = 'root'; // O nome do usuário do banco de dados
$pass = 'admin'; // A senha do banco de dados
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexão bem-sucedida!";
} catch (\PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
