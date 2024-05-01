<?php

namespace App\Session;

class User {

  /** Metodo responsavel po iniciar a sessao * * dentro da aplicação
  * @return boolean
   */ 
  private static function init(){
    return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;
  }

  /** Metodo responsavel por definir a sessao de login do usuario
   * @param string $name
   * @param string $email
 */ 
  public static function login($name, $email){
    // inicia a sessao da aplicação
    self::init();
    // define a sessao do usuario
    $_SESSION['user'] = [
    'name' => $name,
    'email' => $email
    ];
  }
  /** Método verifica se o usuario está lçogado
  * @return boolean
  */

  public static function isLogged(){
    self::init();
    // retorna a existencia do indice na sessão
    return isset($_SESSION['user']);
  }
  /**
   * Metodo responsavel por retornar as informações guardadas na sessao do usuario
   * @return
   */
  public static function getInfo(){
    // inicia a sessão
    self::init();
     // retorna os dados da sessão
     return $_SESSION['user'] ?? [];
  }

  /**
   * Metodo para deslogar
   */
  public static function logout(){
    self::init();
    // remove a sessão do usuario
    unset($_SESSION['user']);
  }
}

?>