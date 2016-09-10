<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

/*$collection->add('symfony_homepage', new Route('/', array(
    '_controller' => 'symfonyBundle:Default:index',
)));*/
$collection->add('symfony_homepage', new Route('/', array(
    '_controller' => 'symfonyBundle:Cliente:new',
)));

return $collection;
