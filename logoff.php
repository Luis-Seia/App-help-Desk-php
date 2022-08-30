<?php

session_start();
// remover indices do array da sessao
//unset()


session_destroy();
header('Location: index.php'); 
?>