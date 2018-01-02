<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'classes/php-activerecord/ActiveRecord.php';
require_once 'classes/php-mailer/class.phpmailer.php';

$config = array();

// Base URL
// Reemplazar {mipagina.com} por la url de tu pagina
$config['base_url'] = 'http://{mipagina.com}/';
$rutaDisco = __DIR__;

// Variables extras
define('CONT_VARURL','0');
define('URL', strtolower($_SERVER['REQUEST_URI']));
define('EMAIL_SOPORTE', 'soporte@pagina.com');
define('NAME_SOPORTE', utf8_decode('Ameda'));

// Variables globales
$parmURL = array();
$moduloURL = '';
$AppName = 'PHP Web App';

// Carga de clases
include('classes/Router.php');
include('classes/Mailer.php');

$Router = new Router();
$Mailer = new Mailer();

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory(__DIR__ . '/models');
    $cfg->set_connections(array(
      'production' => 'mysql://usuario:password@host/dbname?charset=utf8'
      ));
     $cfg->set_default_connection('production');
});

//usuario y contraseña válidos
session_start();
session_name($AppName);


