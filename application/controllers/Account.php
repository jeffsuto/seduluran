<?php

  class Account extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        
    }

    function login()
    {
        $data['title'] = 'Login';
        echo $this->blade->tampilan('login-front', $data);
    }

    function logout()
    {
        $this->session->unset_userdata('customer');
        redirect(base_url());
    }

  }


?>
