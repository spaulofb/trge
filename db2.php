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
    //
    //  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

    // Definimos o charset=utf8mb4 diretamente na string de conexão
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    //    
    // É recomendável adicionar algumas opções para segurança e tratamento de erros
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em erros de SQL
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna os dados como array associativo
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa Prepared Statements reais do MySQL
    ];
    $pdo = new PDO($dsn, $user, $pass, $options);
    //
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}

// Função para proteger páginas
function verificarLogin() {
    if( !isset($_SESSION['logado'])) {
        //
        header("Location: login.php");
        exit;
    }
}
?>
