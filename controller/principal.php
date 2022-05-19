<?php 

require_once 'model/principal.php';

class principalController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'inicio';
		$this->page_title = '';
		$this->noteObj = new Principal();
	}

	/* example */
	public function login(){
		
		
	}

}

?>