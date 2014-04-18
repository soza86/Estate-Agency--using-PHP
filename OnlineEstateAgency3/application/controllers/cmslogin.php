<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmslogin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('cms_login_view');
  }

}

?>