var base_url = 'http://localhost/seduluran/';

/*
*   Delete data
*/
// Delete item
function deleteItem(code)
{
  $.ajax({

    url     : base_url+'crud/delete/item/'+code,
    method  : 'POST',
    success : function (data)
    {
      console.log('Berhasil delete');
      $('.datatable-item').DataTable().ajax.reload(null, false);
    },
    error   : function (data)
    {
      console.log('Gagal delete');
    }

  });
}

/*
*   menambahkan data
*/
// menambahkan item
// $('#btn-create-item').click(function (e){
//     $.ajax({
//       type    : 'POST',
//       url     : base_url+'crud/create/item',
//       data    : $('#form-create-item').serialize(),
//       success : function(e)
//       {
//         console.log('Berhasil');
//         $('#form-create-item')[0].reset();
//       },
//       error   : function(e)
//       {
//         console.log('Gagal');
//       }
//     });
//
// });

// menambahkan type category
$('#save_ctg_type').click( function (e){

  $.ajax({
    url     : base_url+'crud/create/ctg-type',
    type    : 'POST',
    data    : $('#form_create_ctg_type').serialize(),
    success : function(e)
    {
      console.log('Berhasil menambahkan category type');
      $('#form_create_ctg_type')[0].reset();
      getCategoryType();
    },
    error   : function(e)
    {
      console.log('Gagal');
    }
  });

});

// menambahkan color category
$('#save_ctg_color').click( function (e){

  $.ajax({
    url     : base_url+'crud/create/ctg-color',
    type    : 'POST',
    data    : $('#form_create_ctg_color').serialize(),
    success : function(e)
    {
      console.log('Berhasil menambahkan category color');
      $('#form_create_ctg_color')[0].reset();
      getCategoryColor();
    },
    error   : function(e)
    {
      console.log('Gagal');
    }
  });

});

/*
*   load data
*/
// load data item
$('#load_item').click( function(e){
  $('.datatable-item').DataTable().ajax.reload(null, false);
});
