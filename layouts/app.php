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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
  <? require('app_elements/header.php'); ?>
  <div class="animated fadeIn">
    <?=myyield()?>
  </div>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/notify.js"></script>
</body>
</html>