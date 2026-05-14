<?php
/** 
 *  IPS PERMITIDOS PARA ACESSo 
*
*  1. OBRIGATORIO iniciar a sessao antes de qualquer verificacao
 */
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
/*   2. Verifica se as chaves NÃO estão definidas   */
if (!isset($_SESSION["BASE_URL"]) || !isset($_SESSION["BASE_PATH"])) {
    echo "<h3>Erro: Sessão expirada ou acesso inválido.</h3>";
    echo "<p>Por favor, faça login novamente para configurar o ambiente.</p>";
    
    // Opcional: Redirecionar após 3 segundos
    // header("Refresh: 3; url=index.php");
    
    exit; // Interrompe a execucao do resto da pagina
}
//
/*  3. Se chegou aqui, as sessoes existem. Pode atribuir:  */
//  SESSIONs
$BASE_URL = $_SESSION["BASE_URL"] ;
$BASE_PATH = $_SESSION["BASE_PATH"] ;
//
//  IP Conectado 
$ip_cliente = $_SERVER['REMOTE_ADDR'];
//
// Array IPs permitidos
$ip_permitidos = ['143.107.143.7','143.107.143.231', '143.107.143.232',    '143.107.143.211', '143.107.143.251', '143.107.143.254'];
if( !in_array($ip_cliente, $ip_permitidos) ) {
    http_response_code(503);
    include $BASE_PATH.'includes/em-construcao.html';
    //
    exit;
}
//
?>
