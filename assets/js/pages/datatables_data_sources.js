/* ------------------------------------------------------------------------------
*
*  # Datatables data sources
*
*  Specific JS code additions for datatable_data_sources.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */
  var base_url = 'http://localhost/seduluran/';
  // Table setup
  // ------------------------------

  // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        columnDefs: [{
            orderable: false,
            width: '100px',
            targets: [ 2 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Seacrh:</span> _INPUT_',
            searchPlaceholder: 'Type to search...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });

  var table_item = $('.datatable-item').dataTable({

    processing: true, //Feature control the processing indicator.
    serverSide: true, //Feature control DataTables' server-side processing mode.
    order: [[1, 'asc']], //Initial no order.
    ajax: {
      "url"   : base_url+'jsonapi/getitems',
      "type"  : "POST"
    },
    columns: [
        { data: "item_code" },
        { data: "item_name" },
        { data: "ctg_type_name" },
        { data: "ctg_color_name" },
        { data: "item_status",
            render: function(data)
            {
                if (data == "READY")
                    return '<label class="label label-success">'+data+'</label>'
                else
                    return '<label class="label label-danger">'+data+'</label>'
            }
        },
        { data: "item_price",
            render: function(data, type, row)
            {
            return 'Rp. '+data;
            }
        },
        { data: "action"}

      ],

    createdRow: function( row, data, dataIndex ) {
      // Set the data-status attribute, and add a class
    }

  });

  // Enable Select2 select for the length option
  // $('.dataTables_length select').select2({
  //     minimumResultsForSearch: Infinity,
  //     width: 'auto'
  // });
