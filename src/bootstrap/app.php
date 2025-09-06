<?php

// 1. Inicia sessão o quanto antes
session_start();

// 2. Carrega o autoloader do Composer (obrigatório para Dotenv e demais libs)
require __DIR__ . '/../vendor/autoload.php';

// 3. Carrega variáveis do .env (depois que o autoload já existe)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// 4. Aqui você pode inicializar coisas globais
// - Configurações gerais
// - Instâncias globais
// - Rotas
