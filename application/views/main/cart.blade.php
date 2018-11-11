@extends('template.front.template')

@section('title')
  {{'Cart'}}
@endsection

@section('content')
  <div class="cart">
  	<div class="container">
  		<h1 class="h2 heading-primary mt-lg clearfix">
  			<span>Shopping Cart</span>
  			<a href="#" class="btn btn-primary pull-right">Proceed to Checkout</a>
  		</h1>

  		<div class="row">
  			<div class="col-md-8 col-lg-9">
  				<div class="cart-table-wrap">
  					<table class="cart-table">
  						<thead>
  							<tr>
  								<th></th>
  								<th></th>
  								<th>Product Name</th>
  								<th>Unit Price</th>
  								<th>Qty</th>
  								<th>Subtotal</th>
  							</tr>
  						</thead>
  						<tbody class="_cart_">

  						</tbody>
  						<tfoot>
  							<tr>
  								<td colspan="6" class="clearfix">
  									{{-- <button class="btn btn-default hover-primary btn-update">Update Shopping Cart</button> --}}
  									<button class="btn btn-default hover-primary btn-clear" onclick="clearCart()">Clear Shopping Cart</button>
  								</td>
  							</tr>
  						</tfoot>
  					</table>
  				</div>
  			</div>
  			<aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
  				<div class="panel-group">
  					<div class="panel panel-default">
  						<div class="panel-heading">
  							<h4 class="panel-title">
  								<a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
  									Cart Totals
  								</a>
  							</h4>
  						</div>
  						<div id="panel-cart-total" class="accordion-body collapse in">
  							<div class="panel-body">
  								<table class="totals-table">
  									<tbody>
  										<tr>
  											<td>Subtotal</td>
  											<td id="sub-total"></td>
  										</tr>
  										<tr>
  											<td>Grand Total</td>
  											<td id="grand-total"></td>
  										</tr>
  									</tbody>
  								</table>
  								<div class="totals-table-action">
  									<a href="#" class="btn btn-primary btn-block">Proceed to Checkout</a>
  									{{-- <a href="#" class="btn btn-link btn-block">Checkout with Multiple Addresses</a> --}}
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</aside>
  		</div>
  	</div>
  </div>
@endsection
