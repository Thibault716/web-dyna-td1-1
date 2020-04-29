<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'AbstractWsController' => 'ws\\controllers\\AbstractWsController',
),
  '#traitMethodOverrides' => array (
  'controllers\\MainController' => 
  array (
  ),
),
  'controllers\\MainController::contact' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\MainController::partners' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/contact/{message}","methods"=>["get"])
  ),
  'controllers\\MainController::sendMessage' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/partners","methods"=>["get"])
  ),
  'controllers\\MainController::partnerDetail' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/sendMessage","methods"=>["post"])
  ),
);

