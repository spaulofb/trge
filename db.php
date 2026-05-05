<?php
/**
 *   Conexao MYSQLI
 */
$con = new mysqli("localhost", "gemacadm", "lexus2P5W1!", "trge");
if( $con->connect_error ) {
    die("Erro: " . $con->connect_error);
}
//
$con->set_charset("utf8mb4");
//
?>
