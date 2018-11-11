/*
*   Menampilkan data
*/
// Menampilkan category type
getCategoryType();
function getCategoryType()
{
    $.ajax({
      url       : base_url+'jsonapi/getCategoryType',
      method    : 'POST',
      datatype  : 'JSON',
      success   : function(data)
      {
        var option = "";
        var i = 0;
        for (var i = 0; i < data.data.length; i++)
        {
          option += '<option value="'+data.data[i].code+'">'+data.data[i].name+'</option>';
        }
        $('.category-type').html(option);
      },
      error     : function(data)
      {
        console.log('gagal');
      }
    });
}

// Menampilkan category type
$('.category-type').click(function(e){
  $.ajax({
    url       : base_url+'jsonapi/getSubCategory/'+$(this).val(),
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      var option = "";
      var i = 0;
      for (var i = 0; i < data.data.length; i++)
      {
        option += '<option value="'+data.data[i].code+'">'+data.data[i].name+'</option>';
      }
      console.log('berhasil');
      $('.sub-category').html(option);
    },
    error     : function(data)
    {
      console.log('gagal');
    }
  });
});

// Menampilkan category color
getCategoryColor();
function getCategoryColor()
{
    $.ajax({
      url       : base_url+'jsonapi/getCategoryColor',
      method    : 'POST',
      datatype  : 'JSON',
      success   : function(data)
      {
        var option = "";
        var i = 0;
        for (var i = 0; i < data.data.length; i++)
        {
          option += '<option value="'+data.data[i].code+'">'+data.data[i].name+'</option>';
        }
        $('.category-color').html(option);
      },
      error     : function(data)
      {
        console.log('gagal');
      }
    });
}
// ------------------- MENAMPILKAN CATEGORY UNTUK NAVBAR HEADER -------------------
function getSub(code, ctg_name){

  $.ajax({

    url       : base_url+'jsonapi/getSubCategory/'+code,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      var sub = '';
      for (var j = 0; j < data.data.length; j++)
      {
        var name = data.data[j].name;
        sub += '<li><a href="'+base_url+'id/c/'+ctg_name+'/'+name.split(' ').join('_')+'">'+name+'</a></li>';
      }
      $('.'+ctg_name).html(sub);
    }
  });
}
$(document).ready( function(e){

  $.ajax({

    url       : base_url+'jsonapi/getCategoryType',
    method    : 'POST',
    datatype  : 'JSON',
    success   : function (data)
    {
      var ctg = '';
      for (var i = 0; i < data.data.length; i++)
      {
        var code = data.data[i].code;
        var name = data.data[i].name;
        // console.log(code);
        ctg += '<div class="col-md-4">'
              +'<a href="'+base_url+'id/c/'+name.toLowerCase()+'" class="dropdown-mega-sub-title">'+name+'</a>'
              +'<hr><ul class="dropdown-mega-sub-nav '+name.toLowerCase()+'"></ul></div>';
        $('.cat').html(ctg);
        getSub(code, name.toLowerCase());
      }
    }

  });

});
// ------------------- MENAMPILKAN CATEGORY UNTUK NAVBAR HEADER -------------------

// ----------------- MENAMPILKAN CATEGORY PADA HALAMAN CATEGORY -------------------
$(document).ready( function(){
  var ctg_name = $('.ctg').text().toUpperCase();
  $.ajax({

    url       : base_url+'jsonapi/getSubCategoryByName/'+ctg_name,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      var sub = '';
      for (var i = 0; i < data.data.length; i++)
      {
        var name = data.data[i].name;
        sub += '<li><a href="'+base_url+'id/c/'+ctg_name.toLowerCase()+'/'+name.split(' ').join('_')+'">'+name+'</a></li>';
      }
      $('.panel-'+ctg_name).html(sub);
      console.log('berhasil');
    }

  });

});
// ----------------- MENAMPILKAN CATEGORY PADA HALAMAN CATEGORY -------------------

// ----------------- MENAMPILKAN ITEM PADA MODAL DI HALAMAN ADMIN ------------------
function viewItem(code)
{
  $.ajax({

    url       : base_url+'jsonapi/getItemByCode/'+code,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      console.log(data.data.length);
      for (var i = 0; i < data.data.length; i++)
      {
        $('#img-item').attr('src', base_url+'assets/images/'+data.data[i].img_main);
        $('#code-item').val(data.data[i].item_code);
        $('#name-item').val(data.data[i].name);
        $('#ctg-type').val(data.data[i].type_name);
        $('#ctg-color').val(data.data[i].color_name);
        $('#status-item').val(data.data[i].status);
        $('#price-item').val(data.data[i].price);
      }
    },
    error     : function(data)
    {
      console.log('gagal');
    }

  });
}

// ----------------- MENAMPILKAN ITEM PADA MODAL DI HALAMAN ADMIN ------------------

// ----------------- MENAMPILKAN ITEM DI HALAMAN UTAMA --------------------
$(document).ready(function (){
  
    $.ajax({
  
      url       : base_url+'jsonapi/items',
      method    : 'POST',
      datatype  : 'JSON',
      success   : function (data)
      {
        var item = '';
        for (var i = 0; i < data.length; i++)
        {
          item += '<li>'
            +'<div class="product">'
            +  '<figure class="product-image-area">'
            +    '<a href="'+base_url+'id/p/'+data[i].item_name.split(' ').join('-')+'/?code='+data[i].item_code+'" title="'+data[i].item_name+'" class="product-image">'
            +      '<img src="'+base_url+'assets/images/'+data[i].img_main+'" alt="'+data[i].item_name+'">'
            +    '</a>'
            +  '</figure>'
            +  '<div class="product-details-area">'
            +    '<h2 class="product-name"><a href="'+base_url+'id/p/'+data[i].item_name.split(' ').join('-')+'/?code='+data[i].item_code+'" title="Product Name">'+data[i].item_name+'</a></h2>'
  
            +    '<div class="product-price-box">'
            +      '<span class="product-price">'+'Rp. '+data[i].item_price+'</span>'
            +    '</div>'
  
            +    '<div class="product-actions">'
            +      '<a href="'+base_url+'id/cart/?id='+$('.id').val()+'" onclick="addCart(\''+data[i].item_code+'\')" class="addtocart" title="Add to Cart">'
            +        '<i class="fa fa-shopping-cart"></i>'
            +        '<span>Add to Cart</span>'
            +      '</a>'
            +    '</div>'
            +  '</div>'
            +'</div>'
            +'</li>'
        }
        $('.item-home').html(item);
      },
      error       : function (data)
      {
          console.log('Gagal item');
      }
    })
  
  })
  // ----------------- MENAMPILKAN ITEM DI HALAMAN UTAMA --------------------

// ----------------- MENAMPILKAN ITEM BERDASARKAN KATEGORI DI HALAMAN UTAMA --------------------
$(document).ready(function (){

  var url = "";
  var ctg = $('.ctg').text();
  var sub = $('.sub').text().split(' ').join('_');
  if(sub != null){ url = ctg+'/'+sub; }
  else {url = ctg;}
  // console.log(url);

  $.ajax({

    url       : base_url+'jsonapi/getItemByCategory/'+url,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function (data)
    {
      var item = '';
      for (var i = 0; i < data.data.length; i++)
      {
        item += '<li>'
          +'<div class="product">'
          +  '<figure class="product-image-area">'
          +    '<a href="'+base_url+'id/p/'+data.data[i].name.split(' ').join('-')+'/?code='+data.data[i].code+'" title="'+data.data[i].name+'" class="product-image">'
          +      '<img src="'+base_url+'assets/images/'+data.data[i].img+'" alt="'+data.data[i].name+'">'
          +    '</a>'
          +  '</figure>'
          +  '<div class="product-details-area">'
          +    '<h2 class="product-name"><a href="'+base_url+'id/p/'+data.data[i].name.split(' ').join('-')+'/?code='+data.data[i].code+'" title="Product Name">'+data.data[i].name+'</a></h2>'
          +    '<div class="product-ratings">'
          +      '<div class="ratings-box">'
          +        '<div class="rating" style="width:60%"></div>'
          +      '</div>'
          +    '</div>'

          +    '<div class="product-price-box">'
          +      '<span class="product-price">'+'Rp. '+data.data[i].price+'</span>'
          +    '</div>'

          +    '<div class="product-actions">'
          +      '<a href="'+base_url+'id/cart/?id='+$('.id').val()+'" onclick="addCart('+"'"+data.data[i].code+"'"+')" class="addtocart" title="Add to Cart">'
          +        '<i class="fa fa-shopping-cart"></i>'
          +        '<span>Add to Cart</span>'
          +      '</a>'
          +    '</div>'
          +  '</div>'
          +'</div>'
          +'</li>'
      }
      $('.item-view').html(item);
    },
    error       : function (data)
    {
        // console.log('Gagal');
    }
  })

})
// ----------------- MENAMPILKAN ITEM DI HALAMAN UTAMA --------------------