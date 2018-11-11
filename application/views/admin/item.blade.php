{{-- ------------- TEMPLATE --------------- --}}
@extends('template.admin.template')
{{-- -------------------------------------- --}}

@section('title')
  {{$title}}
@endsection

@section('theme_js')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/media/fancybox.min.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/plugins/notifications/bootbox.min.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/plugins/notifications/sweet_alert.min.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switch.min.js"></script>
  {{-- <script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switchery.min.js"></script> --}}
  <script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>

  <script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_data_sources.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/core/app.js"></script>
	{{-- <script type="text/javascript" src="{{base_url()}}assets/js/pages/form_checkboxes_radios.js"></script> --}}
@endsection

@section('custom_js')
  <script type="text/javascript" src="{{base_url()}}assets/js/custom.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/update.js"></script>
  <script type="text/javascript" src="{{base_url()}}assets/js/delete.js"></script>
@endsection

@section('page-title')
  {{$title}}
@endsection

@section('content')
  <div class="panel panel-flat">
		<div class="panel-heading">
			<h6 class="panel-title">Management Item</h6>
			<div class="heading-elements">
				<ul class="icons-list">
      		<li><a data-action="collapse"></a></li>
      		<li><a data-action="reload"></a></li>
      		<li><a data-action="close"></a></li>
      	</ul>
    	</div>
		</div>

		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-solid nav-justified">
					<li class="active"><a href="#manage" data-toggle="tab" id="load_item">Manage Items</a></li>
					<li><a href="#create" data-toggle="tab">Add Item</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="manage">
            <table class="table datatable-item datatable-html">
							<thead>
								<tr>
									<th>Code</th>
									<th>Name</th>
									<th>Type</th>
									<th>Color</th>
									<th>Status</th>
									<th>Price</th>
                  <th>Action</th>
								</tr>
							</thead>
						</table>
            @include('admin.modal.modal_view_item')
            @include('admin.modal.modal_edit_item')
					</div>

					<div class="tab-pane" id="create">
            @include('admin.form.form_create_item')
            @include('admin.modal.modal_create_ctg_color')
            @include('admin.modal.modal_create_ctg_type')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
