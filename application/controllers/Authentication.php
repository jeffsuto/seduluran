<?php

  /**
   * Controller Authentication
   */
  class Authentication extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function login()
    {
        $role = $this->uri->segment(3);

        switch ($role) {
          case 'admin':
            $data = array( 'username' => $this->input->post('username') );
            $password = $this->input->post('password');
            $query = $this->m_login->cek($data, $role);
            if($query->num_rows() > 0)
            {
              $db_password = $this->encryption->decrypt($query->row()->password);
              if($password == $db_password)
              {
                $this->session->set_userdata('admin', 'admin');
              }
            }
            redirect('admin');
            break;

          case 'customer':
            $data = array( 'acc_email' => $this->input->post('email') );
            $password = $this->input->post('password');
            $query = $this->m_login->cek($data, $role);

            if($query->num_rows() > 0)
            {
              $db_password = $this->encryption->decrypt($query->row()->acc_password);
              if($password == $db_password)
              {
                $id = $query->row()->id_ctm;
                $this->session->set_userdata('customer', $this->enkripsi->enkrip($this->encryption->encrypt($id)));
                redirect(base_url());
              }
              else
              {
                redirect('account/login');
              }
            }
            else
            {
              redirect('account/login');
            }
            break;
        }
    }

    function logout()
    {
        $this->session->unset_userdata('admin');
        redirect('admin');
    }

  }


?>
