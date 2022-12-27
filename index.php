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

include_once "classes/db.class.php";
include_once "api/clientes/clientes.php";

// var_dump($api);
// var_dump($acao);
// var_dump($param);
// var_dump($method);


// var_dump($_GET['path']);