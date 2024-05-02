<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];
$route = [explode('/', trim($_GET['path'], '/'))];
$request = json_decode(file_get_contents('php://input'));

switch ($method) {
  case 'GET':
    get($request);
    break;
  case 'POST':
    post($route, $request);
    break;
  case 'PUT':
    put($request);
    break;
  case 'DELETE':
    delete($request);
    break;
  default:
    handle_error($request);
    break;
}

function get($request)
{
  // Implemente a lógica GET aqui
  echo json_encode(array("message" => "GET method is called"));
}

function post($route, $request)
{
  // Implemente a lógica POST aqui
  var_dump($route, $request);
  echo json_encode(array("message" => "POST method is called"));
}

function put($request)
{
  // Implemente a lógica PUT aqui
  echo json_encode(array("message" => "PUT method is called"));
}

function delete($request)
{
  // Implemente a lógica DELETE aqui
  echo json_encode(array("message" => "DELETE method is called"));
}

function handle_error($request)
{
  // Implemente a lógica de tratamento de erro aqui
  echo json_encode(array("message" => "Error: method not handled"));
}
