<?php
namespace controllers;
 /**
 * Controller SampleController
 **/
class SampleController extends ControllerBase{

	public function index(){
		$this->loadView("SampleController/index.html");
	}
}
