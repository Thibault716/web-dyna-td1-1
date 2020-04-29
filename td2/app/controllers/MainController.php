<?php
namespace controllers;
use ws\controllers\AbstractWsController;

/**
 * Controller MainController
 */
class MainController extends AbstractWsController{
    

public function index() {
    $this->loadView("MainController/index.html");
/**
*
* @get("_default","name"=>"Home")
*/
}
        
    
public function contact($message,$who='world'){
    $this->loadView('MainController/contact.html');
/**
*@route("MainController/contact/{message}","methods"=>["get"])
**/
}


public function partners(){
    $this->loadView('MainController/partners.html');
/**
 *@route("MainController/partners","methods"=>["get"])
**/
}


public function sendMessage(){
    $this->loadView('MainController/sendMessage.html');
/**
*@route("MainController/sendMessage","methods"=>["post"])
**/
}


public function partnerDetail($MainControllerpartnerDetails){
    $this->loadView('MainController/partnerDetail.html');
/**
*@route("MainController/partnerDetail","methods"=>["get"])
**/
}
}
