<?php

  class M_json extends CI_Model
  {

    function __construct()
    {
        parent::__construct();
    }

    function getItems()
    {
        $this->datatables->select(
          'item_code, item_name, ctg_type_name, ctg_color_name,
           item_status, item_price'
        );
        $this->datatables->from('item');
        $this->datatables->join('category_type', 'item.ctg_type_code = category_type.ctg_type_code', 'inner');
        $this->datatables->join('category_color', 'item.ctg_color_code = category_color.ctg_color_code', 'inner');
        $this->datatables->add_column('action',
                '<button class="btn btn-info btn-sm" onclick="editItem(\'$1\')" data-toggle="modal" data-target="#edit-item">
                  <i class="icon-pencil"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteItem(\'$1\')">
                  <i class="icon-trash"></i>
                </button>', 
                'item_code');
        return $this->datatables->generate();
    }

  }


?>
