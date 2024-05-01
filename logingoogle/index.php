<?php

require_once __DIR__ . '/vendor/autoload.php'; // Caminho para o autoload.php na pasta raiz do projeto

// dependencias
use \App\Session\User as SessionUser;

include_once __DIR__ . '/includes/header.php'; // Caminho para o header.php na pasta includes


// pagina login, se não tiver logado aparece a tela de login
include_once SessionUser::isLogged() ?
 __DIR__ . '/includes/admin.php':
 __DIR__.'/includes/login.php';

// footer
include_once __DIR__ . '/includes/footer.php'; 

?>
