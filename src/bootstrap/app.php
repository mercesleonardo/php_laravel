<?php

// 1. Inicia sessão o quanto antes
session_start();

// 2. Carrega o autoloader do Composer (obrigatório para Dotenv e demais libs)
require __DIR__ . '/../vendor/autoload.php';

// 3. Carrega helpers/funções próprias do projeto
require __DIR__ . '/../core/helpers/constants.php';
require __DIR__ . '/../core/helpers/functions.php';

// 4. Carrega variáveis do .env (depois que o autoload já existe)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// 5. Aqui você pode inicializar coisas globais
// - Configurações gerais
// - Instâncias globais
// - Rotas