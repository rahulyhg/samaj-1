<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rural extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		
		$this->template->load('front','rural/index');
	}

	public function main_members() {
		
		$this->template->load('front','rural/main_members');
	}

	public function families() {
		
		$this->template->load('front','rural/families');
	}

	public function member() {
		
		$this->template->load('front','rural/member');
	}
}
