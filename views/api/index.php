<?php 

if(count($parmURL)!=0){
  require($parmURL[0].'/index.php');
}else{
  header('Location: '.$config['base_url'].'auth/login/');
}
?>
