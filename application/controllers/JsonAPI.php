<?php

  class JsonAPI extends CI_Controller
  {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_admin', 'm_json', 'm_front'));
    }

    function getCategoryType()
    {
        $category = $this->m_admin->getCategoryType();
        $data = array();
        foreach ($category->result() as $res)
        {
            $data[] = array(
              'code' => $res->ctg_type_code,
              'name' => $res->ctg_type_name
            );
        }
        $output = array( 'data' => $data );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function getSubCategory($id = "")
    {
        $category = $this->m_admin->getSubCategory( array('ctg_type_code' => $id) );
        $data = array();
        foreach ($category->result() as $res)
        {
            $data[] = array(
              'code' => $res->sub_id,
              'name' => $res->sub_name
            );
        }
        $output = array( 'data' => $data );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function getSubCategoryByName($name = "")
    {
        $category = $this->m_front->getSubCategoryByName( array('ctg_type_name' => $name) );
        $data = array();
        foreach ($category->result() as $res)
        {
            $data[] = array(
              'code' => $res->sub_id,
              'name' => $res->sub_name
            );
        }
        $output = array( 'data' => $data );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function getCategoryColor()
    {
        $category = $this->m_admin->getCategoryColor();
        $data = array();
        foreach ($category->result() as $res)
        {
            $data[] = array(
              'code' => $res->ctg_color_code,
              'name' => $res->ctg_color_name
            );
        }
        $output = array( 'data' => $data );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function getItems()
    {
        header('Content-Type: application/json');
        echo $this->m_json->getItems();
    }

    function items()
    {
      $item = $this->m_front->getItemSet();
      $data = array();
      foreach ($item->result() as $res)
      {
          $data[] = array(
            'item_code' => $this->enkripsi->enkrip($this->encryption->encrypt($res->item_code)),
            'item_name' => $res->item_name,
            'item_price'     => $res->item_price,
            'img_main'  => $res->img_main
          );
      }
      header('Content-Type: application/json');
      echo json_encode($data);
    }

    function getItemByCode($code = "")
    {
        $item = $this->m_admin->getItemByCode($code);
        $data = array();
        foreach ($item->result() as $res)
        {
            $data[] = array(
              'item_code' => $res->item_code,
              'name'      => $res->item_name,
              'type_name' => $res->ctg_type_name,
              'color_name'=> $res->ctg_color_name,
              'status'    => $res->item_status,
              'price'     => $res->item_price,
              'img_main'  => $res->img_main
            );
        }
        $output = array( 'data' => $data );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function getItemByCategory($cat = "", $sub = "")
    {
        $sub = str_replace('_', ' ', $sub);
        $item; $data = array();
        if ($sub != "") {
           $item = $this->m_front->getItemByCategoryAndSub($cat, $sub);

           foreach ($item->result() as $res)
           {
             $data[] = array(
               'code'  => $this->enkripsi->enkrip($this->encryption->encrypt($res->item_code)),
               'name'  => $res->item_name,
               'price' => $res->item_price,
               'img'   => $res->img_main
             );
           }
        }else {
           $item = $this->m_front->getItemByCategory( array('ctg_type_name' => $cat) );
           foreach ($item->result() as $res)
           {
             $data[] = array(
               'code'  => $this->enkripsi->enkrip($this->encryption->encrypt($res->item_code)),
               'name'  => $res->item_name,
               'price' => $res->item_price,
               'img'   => $res->img_main
             );
           }
        }
        $output = array(
          'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function addCart($code = "", $qty = "")
    {
        $code   = $this->encryption->decrypt($this->enkripsi->dekrip($code));
        $id_ctm = $this->encryption->decrypt($this->enkripsi->dekrip($this->session->userdata('customer')));
        if ($this->session->userdata('customer'))
        {
          if ($this->m_front->cekCart( $code )) {
            $this->m_front->editCart($id_ctm, $code, $qty);
          }
          else {
            $data = array(
              'id_ctm'     => $id_ctm,
              'item_code'  => $code,
              'qty'        => $qty
            );
            $this->m_front->addCart($data);
          }
        }
    }

    function getCart()
    {
        $data = array();
        $cart = $this->m_front->getCart( $this->encryption->decrypt($this->enkripsi->dekrip($this->session->userdata('customer'))) );
        // echo $this->session->userdata('customer');
        foreach ($cart->result() as $res)
        {
          $data[] = array(
            'id_cart' => $res->id_cart,
            'item_name' => $res->item_name,
            'item_code' => $this->enkripsi->enkrip($this->encryption->encrypt($res->item_code)),
            'item_price' => $res->item_price,
            'img' => $res->img_main,
            'qty' => $res->qty
          );
        }
        $output = array(
          'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($output);
    }

    function clearCart()
    {
        $id_ctm = $this->encryption->decrypt($this->enkripsi->dekrip($this->session->userdata('customer')));
        $this->m_front->clearCart($id_ctm);
    }

    function delCart($id = "")
    {
        $id_ctm = $this->encryption->decrypt($this->enkripsi->dekrip($this->session->userdata('customer')));
        $this->m_front->delCart($id, $id_ctm);
    }

  }

?>
