<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

//* {{url_api}}/index.php?path=clientes&acao=lista&param=parametro

if (isset($_GET['path'])) { $path = $_GET['path']; } 
  else { echo "Caminho não existe"; exit; }


if (isset($path)) { $api = $path; } 
  else {echo "Caminho não existe"; exit;}

if (isset($_GET['acao'])) { $acao = $_GET['acao']; } 
  else { $acao = ''; }

if (isset($_GET['param'])) { $param = $_GET['param']; } 
  else { $param = ''; }


$method = $_SERVER['REQUEST_METHOD'];

$GLOBALS['secretJWT'] = '123456';

# Classes
include_once "classes/db.class.php";
include_once "classes/jwt.class.php";
include_once "classes/usuarios.class.php";

# API's
include_once "api/usuarios/usuarios.php";
include_once "api/clientes/clientes.php";
