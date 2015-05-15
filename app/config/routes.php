<?php

$router = new \Phalcon\Mvc\Router(false);

// default
$router->add("/", array(
    'controller' => 'index',
    'action' => 'index'
));

$router->add("/upload/", array(
    'controller' => 'upload',
    'action' => 'index'
));

$router->add("/get-slider-list", array(
    'controller' => 'content',
    'action' => 'getSliderList'
));

$router->add("/get-images-list", array(
    'controller' => 'content',
    'action' => 'getImagesList'
));

$router->addDelete("/get-images-list/{id}", array(
    'controller' => 'content',
    'action' => 'deleteImage',
));

//Set 404 paths
$router->notFound(array(
    "controller" => "group",
    "action" => "index"
));

//$router->handle();
return $router;