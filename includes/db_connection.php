<?php
// Inicia o buffer de saída para evitar problemas com headers enviados antes
ob_start();

// Ativa a exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuração da base de dados
$host = 'localhost';// Servidor
$user = 'i233342';// Nome de utilizador
$password = 'i233342'; // Palavra-passe
$database = 'i233342_GestaoEscolaConducaoFinal'; // Nome da base de dados

// Conexão
$conn = new mysqli($host, $user, $password, $database);