<?php
namespace controllers;
/**
 * Controller MainController
 **/
class MainController extends ControllerBase{
    /**
     *
     * @get("_default","name"=>"Home")
     */
    public function index() {
        $this->loadView("MainController/index.html");
    }
	/**
	 *@route("MainController/contact/{message}","methods"=>["get"])
	**/
	public function contact($message,$who='world'){
		
		$this->loadView('MainController/contactForm.html');

	}


	/**
	 *@route("MainController/partners","methods"=>["get"])
	**/
	public function partners(){
		
		$this->loadView('MainController/partners.html');

	}

	/**
	 *@route("MainController/partnerDetail","methods"=>["get"])
	 **/
	public function partnerDetail($MainControllerpartnerDetails){
	    
	    $this->loadView('MainController/partnerDetail.html');
	    
	}
	
	/**
	 *@route("MainController/sendMessage","methods"=>["post"])
	**/
	public function sendMessage(){
		
		$this->loadView('MainController/sendMessage.html');

	}

}
