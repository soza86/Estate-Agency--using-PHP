<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imslogin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('ims_login_view');
  }

}

?>