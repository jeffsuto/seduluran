<?php

  class M_admin extends CI_Model
  {

    function __construct()
    {
        parent::__construct();
    }

    /*
    *   method untuk insert
    */
    function addItem($data)
    {
        $this->db->insert('item', $data);
    }

    function addCategoryType($data)
    {
        $this->db->insert('category_type', $data);
    }

    function addCategoryColor($data)
    {
        $this->db->insert('category_color', $data);
    }

    function addImg($data)
    {
        $this->db->insert('item_img', $data);
    }

    /*
    *   method untuk get data
    */
    function getCategoryType()
    {
        return $this->db->get('category_type');
    }

    function getSubCategory($where)
    {
        return $this->db->get_where('sub_category', $where);
    }

    function getCategoryColor()
    {
        return $this->db->get('category_color');
    }

    function getItem()
    {
        $this->db->select('*')
                 ->from('item')
                 ->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner')
                 ->join('category_color', 'item.ctg_color_code = category_color.ctg_color_code', 'inner');
        return $this->db->get();
    }

    function getItemByCode($data)
    {
        $this->db->select('*')
                 ->from('item')
                 ->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner')
                 ->join('category_color', 'item.ctg_color_code = category_color.ctg_color_code', 'inner')
                 ->join('item_img', 'item.item_code = item_img.item_code', 'inner')
                 ->where('item.item_code', $data);
        return $this->db->get();
    }

    function getMaxItemValue($code)
    {
        $this->db->select_max('item_code');
        return $this->db->get_where('item', array('ctg_type_code' => $code));
    }

    /*
    *   method untuk update data
    */
    function cartqty($code = "", $qty = "")
    {
        $this->db->where('id_cart', $code)
                 ->update('cart', ['qty' => $qty]);
    }

    /*
    *   method untuk delete data
    */
    function delete($role, $code)
    {
        switch ($role) {
          case 'item':
            $this->db->where('item_code', $code);
            $this->db->delete('item');
            break;
        }
    }
  }


?>
