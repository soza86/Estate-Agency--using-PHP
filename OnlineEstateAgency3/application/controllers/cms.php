<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Cms extends CI_Controller { // Content Management System Controller
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
          if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('cms_home_view', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('cmslogin', 'refresh');
	}
    }
 
    public function properties() //function for setting up the CMS
    {
        $this->grocery_crud->set_table('properties');
		$this->grocery_crud->set_rules('name','name','required');
		$this->grocery_crud->set_rules('place','place','required');
		$this->grocery_crud->set_rules('description','description','required');
		$this->grocery_crud->set_rules('added_by','added by','required');
		$this->grocery_crud->set_rules('Price','price','required|integer');
		$this->grocery_crud->display_as('name','Property Name');
		$this->grocery_crud->set_field_upload('images','propertyimages');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('cms_template.php',$output);    
    }
	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('cms', 'refresh');
  }
}