<?php

// autoload do composer
require __DIR__ . '/vendor/autoload.php';

// Dependencias
use Google\Client as GoogleClient;
use App\Session\User; // Importe a classe SessionUser corretamente

// Validação principal do cookie

// Verificar campos obrigatorios
// Se não existe token ou credencial, ele volta para HOME
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
  header('location: index.php');
  exit;
}

// cookie CSRF
$cookie = $_COOKIE['g_csrf_token'] ?? '';

// cookie verifica o valor do cookie e do post
if($_POST['g_csrf_token'] != $cookie){
  header('location: index.php');
  exit;
}

// Validação segundaria do token
require_once 'vendor/autoload.php';

// 

$client = new GoogleClient(['client_id' => '571574723170-ie95viqtscgnr3raq6siu1ipao0fl0ji.apps.googleusercontent.com']);  

// Obter dados do usuario com base no  JWT
$payload = $client->verifyIdToken($_POST['credential']);

// Verifica os dados do payload
if (isset($payload['email'])) {
  // echo "<pre>";
  // print_r($payload);
  // echo "<pre>";

  User::login($payload['name'],$payload['email']);
  header('location: index.php');
  exit;
} 
// problema ao consultar
die('Problema na consulta na API google');
?>
