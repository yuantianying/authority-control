<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('default', new Route('/', array(
    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',
)));

return $collection;