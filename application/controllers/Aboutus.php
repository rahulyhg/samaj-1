<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		
		$this->template->load('front','aboutus/index');
	}

}
