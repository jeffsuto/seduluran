<?php

  class Crud extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_admin');
      $this->load->library('item');
    }

    function index()
    {
        echo $this->item->generateItemCode('MSL');
    }

    function create()
    {
      $option = $this->uri->segment(3);
      switch ($option) {
        // menambahkan item
        case 'item':
          $code = $this->input->post('category-type');
          $new_code = "";
          $query = $this->m_admin->getMaxItemValue($code);
          if($query->row()->item_code != null)
          {
              $max_code = $query->row()->item_code;
              $new_code = $this->item->generateItemCode($code, $max_code);
          }
          else
          {
              $new_code = $code."-".sprintf("%04s", 1);
          }

          $data = array(
            'item_code' => $new_code,
            'item_name' => $this->input->post('name'),
            'ctg_type_code' => $this->input->post('category-type'),
            'sub_id'    => $this->input->post('sub-category'),
            'ctg_color_code' => $this->input->post('category-color'),
            'item_status' => $this->input->post('status'),
            'item_price' => $this->input->post('price')
          );

          $this->m_admin->addItem($data);

          $nmfile = $new_code."_"; //nama file
          $config['upload_path'] = './assets/images/'; //Folder untuk menyimpan hasil upload
          $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
          $config['file_name'] = $nmfile; //nama yang terupload nantinya
          $this->upload->initialize($config);

          if ($_FILES['img'])
          {
            if($this->upload->do_upload('img'))
            {
              $img = $this->upload->data();
              $data = array(
                'img_main' => $img['file_name'],
                'item_code' => $new_code
              );
              $this->m_admin->addImg($data); //akses model untuk menyimpan ke database
              //dibawah ini merupakan code untuk resize
              $config2['image_library'] = 'gd2';
              $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
              $config2['maintain_ratio'] = TRUE;
              $config2['width'] = 1000; //lebar setelah resize menjadi 1000 px
              $this->load->library('image_lib',$config2);
              $this->image_lib->resize(); //proses resize
              redirect(base_url('admin/item'));
            }
            else
            {
              echo "Gagal updload";
            }
          }


          break;

        // menambahkan category type
        case 'ctg-type':

          $data = array(
            'ctg_type_code' => $this->input->post('code'),
            'ctg_type_name' => $this->input->post('name')
          );
          $this->m_admin->addCategoryType($data);
          break;

        // menambahkan category color
        case 'ctg-color':

          $data = array(
            'ctg_color_code' => $this->input->post('code'),
            'ctg_color_name' => $this->input->post('name')
          );
          $this->m_admin->addCategoryColor($data);
          break;

        // menambahkan account
        case 'account' :

          $data = array(
            'acc_username' => $this->input->post('username'),
            'acc_password' => $this->input->post('password'),
            'acc_email'    => $this->input->post('email')
          );
          $this->m_front->addAccount($data);
          break;

      }
    }

    function update($role = "", $code = "")
    {
      switch ($role) {
        case 'cartqty':
          $qty = $this->uri->segment(5);
          $this->m_admin->cartqty($code, $qty);
          break;
        
        default:
          # code...
          break;
      }
    }

    function delete($role = "", $code = "")
    {
        switch ($role) {
          case 'item':
            $this->m_admin->delete($role, $code);
            break;
        }
    }

  }


?>
