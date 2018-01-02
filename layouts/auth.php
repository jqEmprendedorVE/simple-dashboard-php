<?php 
if(isset($_SESSION['validado'])) {
  if($_SESSION['validado']=='SI')
  header('Location: '.$config['base_url'].'app/');
  die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?=has_content('title')?><?=$AppName?></title>
  <base href="<?=$config['base_url']?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,700,400italic">
  <link href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel=stylesheet integrity=sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN crossorigin=anonymous>
  <link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="stylesheet" href="/assets/css/notify.css">
  <style>
    .bg-auth {
      position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        content: '';
        //background-image: -webkit-linear-gradient(top, #00acc1 0%, #048a9a 100%);
        //background-image: -o-linear-gradient(top, #00acc1 0%, #048a9a 100%);
        //background-image: -webkit-gradient(linear, left top, left bottom, from(#00acc1), to(#048a9a));
        //background-image: linear-gradient(to bottom, #00acc1 0%, #048a9a 100%);
        //background-image:linear-gradient(-225deg, #00acc1 0%, #007f8f 100%);
        background-repeat: repeat-x;
        background-position: center top;
        -webkit-background-size: cover;
        background-size: cover;
      background: #ECEFF1;

    }
    .auth {
      position: relative;
    }
    .form_auth{
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      background: white;
      width: 100%;
      padding: 30px;
      font-size: 12px;
      margin: 0 auto;
    }
    @media (max-width: 768px) {
      .bg-auth {
        background: #ECEFF1;
      }
      .auth {
        position: relative;
      }
      .form_auth{
        width: 100%;
        padding: 10px;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translate(0,-50%);
        background: #ECEFF1;
      }
      .form_auth .panel{
        background: #ECEFF1;
      }

    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
  <div id="auth">
  <div class="bg-auth"></div>
  <div class="form_auth animated fadeIn">
    <div class="panel animated bounceIn">
      <div class="panel-body">
        <div style="text-align:center;max-width:350px;margin:0 auto;">
          <h1>
            Ameda Web APP
            <!--<img src="/static/img/logo.png" width="40%"  alt="Logo">-->
          </h1>
          <?=myyield()?>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/notify.js"></script>
</body>
</html>