<?php 

if(count($_POST)==0) {
  echo json_encode(array(
    'type'=>'error',
    'message'=>'Sin datos recibidos de formulario'
  ));
  die();
}

$getUser = Users::login($_POST['user'], $_POST['password']);

if($getUser){
  echo json_encode(array(
    'type'=>'success',
    'message'=>'Usuario validado',
  ));
}else{
  echo json_encode(array(
    'type'=>'error',
    'message'=>'Usuario o contraseña invalida',
  ));
}

?>