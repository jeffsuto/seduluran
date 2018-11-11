function deleteItem(id)
{
  swal({
      title: "Are you sure?",
      text: "This data will be remove!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#FF7043",
      confirmButtonText: "Yes, remove!",
      }, function() {
        $.ajax({
            url : base_url+'crud/delete/item/'+id,
            success : function(data)
            {
                $('.datatable-item').DataTable().ajax.reload(null, false);
            },
            error : function(data)
            {
                console.log('Failed');
            }
        })
    });
  return false;
}