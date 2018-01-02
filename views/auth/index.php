<?php 
if(count($parmURL)!=0){
  switch ($parmURL[0]) {
    case 'login':
      title('Inicio de sesion');
      require('login.php');
      break;
    default:
      header('Location: '.$config['base_url'].'auth/login/');
      break;
  }
}else {
  header('Location: '.$config['base_url'].'auth/login/');
}
?>
