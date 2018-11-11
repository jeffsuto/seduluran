// Edit item
function editItem(code)
{
  $.ajax({

    url       : base_url+'jsonapi/getItemByCode/'+code,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      for (var i = 0; i < data.data.length; i++)
      {
        $('#img-item-edit').attr('src', base_url+'assets/images/'+data.data[i].img_main);
        $('#code-item-edit').val(data.data[i].item_code);
        $('#name-item-edit').val(data.data[i].name);
        $('#ctg-type-edit').val(data.data[i].type_name);
        $('#ctg-color-edit').val(data.data[i].color_name);
        $('#status-item-edit').val(data.data[i].status);
        $('#price-item-edit').val(data.data[i].price);
      }
    }

  });
}