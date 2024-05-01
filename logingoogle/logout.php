<?php

// autoload do composer
require __DIR__ . '/vendor/autoload.php';

// Dependencias
use App\Session\User as SessionUser; // Importe a classe SessionUser corretamente

// Validação principal do cookie
// Desloga o usuario
SessionUser::logout();

// Redireciona o usuario para home
header('location: index.php');
exit;
