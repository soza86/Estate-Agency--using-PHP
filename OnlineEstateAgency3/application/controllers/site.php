<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller { //Main Portal Controller
	public function index(){ // function index is loaded
		$this->home(); //load function home
	}
	public function home(){
		$this->load->view("site_header"); // view site_header is loaded,common in all
		$this->load->view("site_nav"); //view navigation is loaded,common in all
		$this->load->view("content_home"); //content in home page
		$this->load->view("site_footer"); //view footer is loaded, common in all
	}
	public function realestate(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_realestate"); //content in page real estate
		$this->load->view("site_footer");
	}
	public function properties(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_properties"); //content in page showing the properties
		$this->load->view("site_footer");
	}
	public function naxosisland(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_naxosisland"); //content in page naxos island
		$this->load->view("site_footer");
	}
	public function contact(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact"); //content in page contact us
		$this->load->view("site_footer");
	}
	
}
