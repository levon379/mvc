<head>
<link rel="stylesheet" type="text/css" href="/var/www/mvc/view/css/style.css">
<style>
body {
    background-color: linen;
    margin-left: 200px;
}
button {margin-left: 20px;}
h1 {
    color: maroon;
    margin-left: 200px;
} 
ul { list-style: none outside none; margin:0; padding: 0; }
li { float: left; margin: 0 10px; }
</style>
</head>
<?php

session_start();

define('MVC_BASE_PATH', __DIR__ . '/');
define('MVC_BASE_URL', 'http://localhost/mvc/index.php');
//define('MVC_BASE_URL', 'http://mvc.local/');
define('API_BASE_URL', 'http://testapi.local/');
//print_r(MVC_BASE_PATH);die('aa');
require_once MVC_BASE_PATH . 'controller/Base.php';
//require_once MVC_BASE_PATH . 'view/css/style.css';


$base_controller = new BaseController();
$request_uri = explode('/',$_SERVER['REQUEST_URI']);
$url_parts = $base_controller->explode_segments();


$controller = $request_uri[3];
$action = $request_uri[4];
if (isset($request_uri[5])){
$id = $request_uri[5];
//print_r($id);die('aa');
} else $id = null;
$controllerPath = MVC_BASE_PATH . 'controller/' . ucfirst(strtolower($controller)) . '.php';
if (!file_exists($controllerPath)) {
    echo 'Invalid controller';
    die;
}
//print_r($controllerPath);die('aa1');
require_once $controllerPath;

$controllerClassName = ucfirst(strtolower($controller)) . 'Controller';
//echo $controllerPath;die;
//print_r($controllerClassName);die('aa');
$obj = new $controllerClassName();
$obj->$action($id);
