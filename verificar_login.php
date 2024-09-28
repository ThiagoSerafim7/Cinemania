<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['user_email'])) {
    // Se o usuário não estiver logado, redirecione-o para a página de login
    header("Location: login.php");
    exit();
}