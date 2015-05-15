<?php

$router = new \Phalcon\Mvc\Router(false);

// default
$router->add("/", array(
    'controller' => 'index',
    'action' => 'index'
));

$router->add("/upload", array(
    'controller' => 'upload',
    'action' => 'index'
));

//Set 404 paths
$router->notFound(array(
    "controller" => "group",
    "action" => "index"
));

$router->handle();
return $router;