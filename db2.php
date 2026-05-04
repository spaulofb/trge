<?php
/**
 *   Conexao MYSQLI
 */
session_start();
$host = 'localhost';
$db   = 'trge';
$user = 'gemacadm';
$pass = 'lexus2P5W1!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}

// Função para proteger páginas
function verificarLogin() {
    if (!isset($_SESSION['logado'])) {
        header("Location: login.php");
        exit;
    }
}
?>
