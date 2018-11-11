<?php

  class M_front extends CI_Model
  {

    function __construct()
    {
        parent::__construct();
    }

    /*
    *   get data
    */
    function getCustomerData($data)
    {
        return $this->db->get('customer');
    }

    function getCategoryType()
    {
        return $this->db->get('category_type');
    }

    function getSubCategoryByName($data)
    {
        $id = $this->db->get_where('category_type', $data)->row()->ctg_type_code;
        $query = $this->db->select('*')
                    ->from('sub_category')
                    ->join('category_type', 'sub_category.ctg_type_code = category_type.ctg_type_code', 'inner')
                    ->where('sub_category.ctg_type_code', $id)
                    ->get();
        return $query;
    }

    function getItemSet($code = "")
    {
        if($code == "")
        {
            $query = $this->db->select('*')
                      ->from('item')
                      ->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner')
                      ->join('sub_category', 'item.sub_id = sub_category.sub_id', 'inner')
                      ->join('item_img', 'item.item_code = item_img.item_code', 'inner')
                      ->get();
        }
        else 
        {
            $query = $this->db->select('*')
                      ->from('item')
                      ->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner')
                      ->join('sub_category', 'item.sub_id = sub_category.sub_id', 'inner')
                      ->join('item_img', 'item.item_code = item_img.item_code', 'inner')
                      ->where('item.item_code', $code)
                      ->get();
        }
        return $query;
    }

    function getItemByCategory($name)
    {
        $id = $this->db->get_where('category_type', $name)->row()->ctg_type_code;
        $query = $this->db->select('*')
                        ->from('item')
                        ->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner')
                        ->join('item_img', 'item.item_code = item_img.item_code', 'inner')
                        ->where('item.ctg_type_code', $id)
                        ->get();
        return $query;
    }

    function getItemByCategoryAndSub($cat, $sub)
    {
        $code_cat = $this->db->get_where('category_type', array('ctg_type_name' => $cat))->row()->ctg_type_code;
        $code_sub = $this->db->get_where('sub_category', array('sub_name' => $sub ))->row()->sub_id;
        $query = $this->db->select('*')
                        ->from('item')
                        ->join('item_img', 'item.item_code = item_img.item_code', 'inner')
                        ->where( array('item.ctg_type_code' => $code_cat, 'sub_id' => $code_sub ) )
                        ->get();
        return $query;
    }

    function getCart($id)
    {
        return $this->db->select('*')
                 ->from('cart')
                 ->join('item', 'cart.item_code=item.item_code', 'inner')
                 ->join('item_img', 'item.item_code=item_img.item_code', 'inner')
                 ->join('category_type', 'item.ctg_type_code=category_type.ctg_type_code', 'inner')
                 ->join('sub_category', 'sub_category.sub_id=item.sub_id', 'inner')
                 ->join('customer', 'cart.id_ctm=customer.id_ctm', 'inner')
                 ->where('cart.id_ctm', $id)
                 ->get();
    }

    function cekCart($code)
    {
        $query = $this->db->get_where('cart', array('item_code' => $code) );
        if ($query->num_rows() > 0) {
          return true;
        }else {
          return false;
        }
    }

    /*
    *   input data
    */
    function addAccount($data)
    {
        $this->db->insert('account', $data);
    }

    function addCart($data)
    {
        $this->db->insert('cart', $data);
    }

    /*
    *  Edit data
    */
    function editCart($id_ctm, $code, $qty)
    {
        $qty_old = $this->db->get_where('cart', array('id_ctm' => $id_ctm, 'item_code' => $code) )->row()->qty;
        $qty_new = $qty + $qty_old;

        $this->db->where( array('id_ctm' => $id_ctm, 'item_code' => $code) )
                 ->update( 'cart', array('qty' => $qty_new) );
    }

    /*
    *  Delete data
    */
    function clearCart($id)
    {
        $this->db->where('id_ctm', $id)
                 ->delete('cart');
    }

    function delCart($id, $id_ctm)
    {
        $this->db->where( array('id_ctm' => $id_ctm, 'id_cart' => $id) )
                 ->delete('cart');
    }
  }


?>
