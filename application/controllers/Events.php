<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		
		$this->template->load('front','events/index');
	}

	public function wedding() {
		
		$this->template->load('front','events/wedding');
	}

}
