<?php
namespace controllers;
use ws\controllers\AbstractWsController;

/**
 * Controller MainController
 */
class MainController extends AbstractWsController{
    

    public function index() {
        $menu=$this->getMenu('Home');
        $messages=$this->dataProvider->getMessages();
        $content=nl2br($this->dataProvider->getPageContent('Home'));
        $this->loadView('MainController/index.html',compact('messages','content') + $menu);
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
        $menu=$this->getMenu('Partners');
        $messages=$this->dataProvider->getPartners();
        $this->loadView('main/vBase.html');
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
