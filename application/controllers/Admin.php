<?php

  class Admin extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    function index()
    {
        if(!$this->session->userdata('admin'))
        {
          $data['title'] = "Login";
          echo $this->blade->tampilan('login-admin', $data);
        }
        else
        {
          $data['title'] = "Dashboard";
          echo $this->blade->tampilan('admin.home', $data);
        }
    }

    function item()
    {
        if(!$this->session->userdata('admin'))
        {
          $data['title'] = "Login";
          echo $this->blade->tampilan('login-admin', $data);
        }
        else
        {
          $data['title'] = 'Item';
          echo $this->blade->tampilan('admin.item', $data);
        }
    }

    function show()
    {
        $item = $this->m_admin->getItem();
        $data = array();
        foreach ($item->result() as $res)
        {
          $data = array(
            'nama-item' => $res->item_name,
            'nama-kategori' => $res->ctg_type_name
          );
        }
        echo json_encode($data);
    }

  }


?>
