<?php
  $host = 'localhost';
  $dbname = 'nipo_db';
  $username = 'root';
  $password = '';
  
// conexao 
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erro ao conectar: " . $e->getMessage());
}
?>
