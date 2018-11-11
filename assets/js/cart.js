cart_on_header();
function cart_on_header()
{
  $.ajax({
    url     : base_url+'jsonapi/getCart',
    success : function(data)
    {
      var cart = "";
      var items = 0;
      var total_price = 0;
      for (var i = 0; i < data.data.length; i++)
      {
        var price = data.data[i].item_price * data.data[i].qty;
        total_price += price;
        cart += '<div class="product product-sm">'+
                  '<a href="#" class="btn-remove" onclick="delCart(\''+data.data[i].id_cart+'\')" title="Remove Product">'+
                    '<i class="fa fa-times"></i>'+
                  '</a>'+
                  '<figure class="product-image-area">'+
                    '<a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">'+
                      '<img src="'+base_url+'assets/images/'+data.data[i].img+'" alt="'+data.data[i].item_name+'">'+
                    '</a>'+
                  '</figure>'+
                  '<div class="product-details-area">'+
                    '<h2 class="product-name"><a href="'+base_url+'id/p/'+data.data[i].item_name.split(' ').join('-')+'/?code='+data.data[i].item_code+'" title="Product Name">'+data.data[i].item_name+'</a></h2>'+

                    '<div class="cart-qty-price">'+
                      data.data[i].qty +' X '+ data.data[i].item_price + ' = '+
                      '<span class="product-price">'+price+'</span>'+
                    '</div>'+
                  '</div>'+
                '</div>';
      }
      
      $('.cart-qty').html(data.data.length);
      $('.cart-on-header').html(cart);
      $('.cart-totals-on-header').html('Rp '+total_price);
    },
    error : function(data)
    {
      console.log('gagal cart');

    } 
  });
}

getCart();
function getCart()
{
  $.ajax({

    url       : base_url+'jsonapi/getCart',
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      var cart = "";
      var total_price = 0;
      for (var i = 0; i < data.data.length; i++)
      {
        var price = data.data[i].item_price * data.data[i].qty;
        total_price += price;
        cart += '<tr>'
          +'<td class="product-action-td">'
          +  '<a onclick="delCart('+"'"+data.data[i].id_cart+"'"+')" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>'
          +'</td>'
          +'<td class="product-image-td">'
          +  '<a href="#" title="Product Name">'
          +    '<img src="'+base_url+'assets/images/'+data.data[i].img+'" alt="'+data.data[i].item_name+'">'
          +  '</a>'
          +'</td>'
          +'<td class="product-name-td">'
          +  '<h2 class="product-name"><a href="'+base_url+'id/p/'+data.data[i].item_name.split(' ').join('-')+'/?code='+data.data[i].item_code+'" title="Product Name">'+data.data[i].item_name+'</a></h2>'
          +'</td>'
          +'<td>'+data.data[i].item_price+'</td>'
          +'<td>'
          +  '<div class="qty-holder">'
          +    '<input type="number" class="qty-input" onclick="updateqty(\''+data.data[i].id_cart+'\')" value="'+data.data[i].qty+'">'
          +  '</div>'
          +'</td>'
          +'<td>'
          +  '<span class="text-primary">Rp. '+price+'</span>'
          +'</td>'
          +'</tr>';
      }
      $('#sub-total').html("Rp. "+total_price);
      $('#grand-total').html("Rp. "+total_price);
      $('._cart_').html(cart);
    },
    error      : function(data)
    {
      console.log('gagal cart');
    }

  });
}

function updateqty(code) {

  let qty = $('.qty-input').val();
  $.ajax({
    url : base_url+'crud/update/cartqty/'+code+'/'+qty,
    success : function(data)
    {
      getCart();
      cart_on_header();
    }
  })
}

function addCart(code)
{
  var url = '';
  var qty = $('.item-qty').val();
  if (qty != null) {
    url = code+"/"+qty;
  }else {
    url = code+"/1";
  }
  console.log(url);
  $.ajax({

    url       : base_url+'jsonapi/addCart/'+url,
    method    : 'POST',
    datatype  : 'JSON',
    success   : function(data)
    {
      console.log('berhasil menambahkan cart');
    },
    error       : function (data)
    {
      console.log('gagal menambahkan cart');
    }

  });
}

function delCart(code)
{
  $.ajax({

    url       : base_url+'jsonapi/delcart/'+code,
    method    : 'POST',
    success   : function(e)
    {
      console.log('berhasil menghapus cart terpilih');
      getCart();
      cart_on_header(); 
    },
    error     : function(e)
    {
      console.log('Gagal menghapus cart terpilih');
    }

  });
}

function clearCart()
{
  $.ajax({

    url       : base_url+'jsonapi/clearCart',
    method    : 'POST',
    success   : function(e)
    {
      console.log('Berhasil menghapus seluruh cart');
      getCart();
    }

  });
}
