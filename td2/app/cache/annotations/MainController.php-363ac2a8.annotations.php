<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\MainController' => 
  array (
  ),
),
  'controllers\\MainController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\MainController::contact' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/contact/{message}","methods"=>["get"])
  ),
  'controllers\\MainController::partners' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/partners","methods"=>["get"])
  ),
  'controllers\\MainController::partnerDetail' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/partnerDetail","methods"=>["get"])
  ),
  'controllers\\MainController::sendMessage' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/sendMessage","methods"=>["post"])
  ),
);

