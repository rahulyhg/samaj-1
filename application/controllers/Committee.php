<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Committee extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		
		$this->template->load('front','committee/index');
	}

}
