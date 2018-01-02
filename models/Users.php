<?php

class Users extends ActiveRecord\Model{
  //public static $primary_key = 'idusuario';
  public static $pk = 'usuario';
  public static $table_name = 'TBL_USUARIOS';

  public static function login($usuario,$password){
    global $config;

    // $users = Users::find_by_email_and_password_and_status($usuario, $password,1);
    $users = Users::find_by_usuario_and_clave($usuario, $password);
    if (!empty($users)){
      global $AppName;

      session_name($AppName);
      session_start();

      $_SESSION['validado'] = 'SI';
      $_SESSION['usuario'] = $usuario;
      $_SESSION['nombre_usuario'] = $users->nombre;
      // $_SESSION['grupo']= $users->idgrupo;
      // $_SESSION['idusuario']= $users->idusuario;

      // $users->last_login = date('Y-m-d H:m:s', strtotime('now'));
      // $users->save();

      // header("Location: ".$config['base_url']."app/");
      return true;
    }else{
      return false;
      // header("Location: error/");
    }
  }

  public static function getIdUser(){
    return $_SESSION['idusuario'];
  }

  public static function getName(){
    return $_SESSION['nombre_usuario'];
  }

  public static function getIdGrupo(){
    return $_SESSION['grupo'];
  }

  public static function getUserName(){
    return $_SESSION['usuario'];
  }

  public static function signup($nombreusuario, $email, $password, $idgrupo){
    global $config;

    Users::create(array(
      'nombreusuario' => $nombreusuario
      , 'email' => $email
      , 'password' => $password
      , 'idgrupo' => $idgrupo
      , 'status' => 1
    ));

    Users::login($email,$password);
  }

  public static function logout(){
    global $config;

    session_destroy();
    header('Location: '.$config['base_url'].'auth/login');
  }

  public function before_create(){
    $this->assign_attribute('date_added' , date('Y-m-d H:m:s', strtotime('now')));
  }

  public function before_update(){
    $this->assign_attribute('date_modified' , date('Y-m-d H:m:s', strtotime('now')));
  }
}
