<?php

ob_start(); // Start buffering output

// ... some code that might accidentally echo something ...

header("Location: teste.php");
ob_end_flush(); // Send the buffer and the header
exit();


?>
