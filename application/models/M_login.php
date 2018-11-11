<?php

  /**
   * Model login
   */
  class M_login extends CI_Model
  {

    function __construct()
    {
        parent::__construct();
    }

    function cek($data, $role)
    {
        switch ($role) {
          case 'admin':
            return $this->db->get_where('admin', $data);
            break;

          case 'customer':
            return $this->db->get_where('account', $data);
            break;
        }
    }

  }


?>
