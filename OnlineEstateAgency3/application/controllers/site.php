<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index(){
		$this->home();
	}
	public function home(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	public function realestate(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_realestate");
		$this->load->view("site_footer");
	}
	public function naxosisland(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_naxosisland");
		$this->load->view("site_footer");
	}
	public function contact(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact");
		$this->load->view("site_footer");
	}
	public function login(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_login");
		$this->load->view("site_footer");
	}
}
