<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Ims extends CI_Controller { //The information management system controller
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database(); //database loaded 
		$this->load->helper('url'); //URL helper is loaded
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD'); //grocery CRUD application library is loaded
    }
 
    public function index() //function index that make the login
    {
        if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('ims_home_view', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('imslogin', 'refresh');
	}
    }
	 public function vendors() //function that sets up functionalities for vendors
    {
        $this->grocery_crud->set_table('vendors'); //table vendors is set
		$this->grocery_crud->set_rules('lastName','last Name','required','alpha'); //set validation rules
		$this->grocery_crud->set_rules('firstName','first Name','required','alpha');
		$this->grocery_crud->set_rules('address','address','required');
		$this->grocery_crud->set_rules('email','email','required');
		$this->grocery_crud->set_rules('contact_number','Contact Number','integer');
        
		$output = $this->grocery_crud->render();
 
        $this->_example_output($output);
    }
		 public function buyers() //function that sets up functionalities for buyers
    {
        $this->grocery_crud->set_table('buyers');
		$this->grocery_crud->set_rules('lastName','last Name','required','alpha');
		$this->grocery_crud->set_rules('firstName','first Name','required','alpha');
		$this->grocery_crud->set_rules('address','address','required');
		$this->grocery_crud->set_rules('email','email','required');
		$this->grocery_crud->set_rules('contact_number','Contact Number','integer');
		
        $output1 = $this->grocery_crud->render();
 
        $this->_example_output($output1);
    }
		 public function agents() //function that sets up functionalities for agents
    {
        $this->grocery_crud->set_table('agents');
		$this->grocery_crud->set_rules('lastName','last Name','required','alpha');
		$this->grocery_crud->set_rules('firstName','first Name','required','alpha');
		$this->grocery_crud->set_rules('address','address','required');
		$this->grocery_crud->set_rules('email','email','required');
		$this->grocery_crud->set_rules('contact_number','Contact Number','integer');
		
        $output2 = $this->grocery_crud->render();
 
        $this->_example_output($output2);
    }
		 public function contracts() //function that sets up functionalities for contracts
    {
        $this->grocery_crud->set_table('contracts');
		$this->grocery_crud->set_rules('buyerName','buyername','required');
		$this->grocery_crud->set_rules('vendorName','vendorname','required');
		$this->grocery_crud->set_rules('agentName','agentname','required');
		$this->grocery_crud->set_rules('propertyName','propertyname','required');
		$this->grocery_crud->set_rules('propertyLocation','propertylocation','required');
		$this->grocery_crud->set_rules('agreedPrice','agreedprice','required|decimal');
		$this->grocery_crud->set_rules('dateSigned','datesigned','required');
		
        $output3 = $this->grocery_crud->render();
 
        $this->_example_output($output3);
    }
	function _example_output($output = null)
 
    {
        $this->load->view('ims_template.php',$output); // the view of the ims is loaded   
    }
	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('ims', 'refresh');
  }
}
 
