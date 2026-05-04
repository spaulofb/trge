<?php
/**
 *   Sair do programa
 */
session_start();
session_destroy();
header("Location: login.php");
?>