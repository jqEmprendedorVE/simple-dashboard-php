<?php 
session_active();

title('Panel principal');

if(count($parmURL)!=0) {
  if(!file_exists(__DIR__.'/'.$parmURL[0].'/index.php')){
    header('Location: '.$config['base_url'].'app/');
  }

  require($parmURL[0].'/index.php');
} else {
?>

<div class="container">
  <div class="col-md-12">
    <h3>Seccion de APP</h3>
  </div>
</div>

<?php 
} ?>