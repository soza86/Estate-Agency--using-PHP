<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
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
      $this->load->view('home_view', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
    }
	 public function vendors()
    {
        $this->grocery_crud->set_table('vendors');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);
    }
		 public function buyers()
    {
        $this->grocery_crud->set_table('buyers');
        $output1 = $this->grocery_crud->render();
 
        $this->_example_output($output1);
    }
		 public function agents()
    {
        $this->grocery_crud->set_table('agents');
        $output2 = $this->grocery_crud->render();
 
        $this->_example_output($output2);
    }
		 public function contracts()
    {
        $this->grocery_crud->set_table('contracts');
        $output3 = $this->grocery_crud->render();
 
        $this->_example_output($output3);
    }
	function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }
	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */