<?php 
if(count($parmURL)!=0){
  switch ($parmURL[0]) {
    case 'logout':
      require('logout.php');
      break;
    default:
      header('Location: '.$config['base_url'].'auth/login/');
      break;
  }
}else{
  header('Location: '.$config['base_url'].'auth/login/');
}
?>
