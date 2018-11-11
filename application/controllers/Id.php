<?php

  class Id extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_front');
    }

    function index()
    {
        $data = array();
        $data['title'] = 'Home';
        if ($this->session->userdata('customer'))
        {
          $id = $this->session->userdata('customer');
          $data['customer'] = $this->m_front->getCustomerData( array('id_ctm' => $id) )->row();
          $data['id_ctm'] = $this->enkripsi->enkrip($this->encryption->encrypt($id));
        }
        echo $this->blade->tampilan('main.home', $data);
    }

    function c()
    {
        $data = array();
        if ($this->session->userdata('customer'))
        {
          $id = $this->session->userdata('customer');
          $data['customer'] = $this->m_front->getCustomerData( array('id_ctm' => $id) )->row();
          $data['id_ctm'] = $this->enkripsi->enkrip($this->encryption->encrypt($id));
        }
        $cat = $this->uri->segment(3);
        $sub = str_replace('_', ' ', $this->uri->segment(4));
        $data['title'] = $cat;
        $data['cat'] = $this->m_front->getSubCategoryByName( array('ctg_type_name' => $cat) )->row();
        $data['sub'] = $sub;
        echo $this->blade->tampilan('main.category', $data);
    }

    function p($item_name = "")
    {
        $code = $this->encryption->decrypt($this->enkripsi->dekrip($this->input->get('code')));
        $data = array();
        if ($this->session->userdata('customer'))
        {
          $id = $this->session->userdata('customer');
          $data['customer'] = $this->m_front->getCustomerData( array('id_ctm' => $id) )->row();
          $data['id_ctm'] = $this->enkripsi->enkrip($this->encryption->encrypt($id));
        }
        $item = $this->m_front->getItemSet($code)->row();
        $data['title'] = $item->item_name;
        $data['cat'] = $item;
        $data['code'] = $this->enkripsi->enkrip($this->encryption->encrypt($item->item_code));
        $data['sub'] = $item->sub_name;
        $data['item'] = $item->item_name;
        echo $this->blade->tampilan('main.item', $data);
    }

    function cart()
    {
        $data = array();
        if ($this->session->userdata('customer'))
        {
          $id = $this->session->userdata('customer');
          $data['customer'] = $this->m_front->getCustomerData( array('id_ctm' => $id) )->row();
          $data['id_ctm'] = $this->enkripsi->enkrip($this->encryption->encrypt($id));
          echo $this->blade->tampilan('main.cart', $data);
        }
        else
        {
          redirect('account/login');
        }
    }

  }


?>
