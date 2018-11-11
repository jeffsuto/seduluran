<?php $__env->startSection('title'); ?>
  <?php echo e(ucwords($title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>
  <script src="<?php echo e(base_url()); ?>assets/js/custom.js"></script>
  <script src="<?php echo e(base_url()); ?>assets/js/cart.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <section class="page-header">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo e(base_url()); ?>">Home</a></li>

				<li class="ctg"><a href="<?php echo e(base_url('id/c/'.strtolower($cat->ctg_type_name))); ?>"><?php echo e(strtolower($cat->ctg_type_name)); ?></a></li>
				<?php if(isset($sub)): ?>
          <li class="sub"><a href="<?php echo e(base_url('id/c/'.strtolower($cat->ctg_type_name).'/'.$sub)); ?>"><?php echo e($sub); ?></a></li>
        <?php endif; ?>
        <?php if(isset($item)): ?>
          <li class="active"><?php echo e(ucwords($item)); ?></li>
        <?php endif; ?>
			</ul>
		</div>
	</section>
  <div class="container">
		<div class="product-view">
			<div class="product-essential">
				<div class="row">
					<div class="product-img-box col-sm-5">
						<div class="product-img-box-wrapper">
              <div class="product-img-wrapper">
              	<img id="product-zoom" src="<?php echo e(base_url()); ?>assets/images/<?php echo e($cat->img_main); ?>" data-zoom-image="<?php echo e(base_url()); ?>assets/images/<?php echo e($cat->img_main); ?>" alt="<?php echo e($cat->item_name); ?>">
              </div>

							<a href="#" class="product-img-zoom" title="Zoom">
								<span class="glyphicon glyphicon-search"></span>
							</a>
						</div>

					</div>

					<div class="product-details-box col-sm-7">
						<h1 class="product-name">
							<?php echo e(ucwords($cat->item_name)); ?>

						</h1>

						<div class="product-rating-container">
              <div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:60%"></div>
								</div>
							</div>
                  <div class="review-link">
                      <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> |
                      <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                  </div>
              </div>

              <div class="product-short-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="product-detail-info">
							<div class="product-price-box">
								<span class="product-price">Rp. <?php echo e($cat->item_price); ?></span>
							</div>
							<p class="availability">
								<span class="font-weight-semibold">Ketersediaan:</span>
								<?php if($cat->item_status == 'READY'): ?>
                  Ada
                <?php else: ?>
                  Kosong
                <?php endif; ?>
							</p>
						</div>

            <div class="product-actions">
  						<div class="product-detail-qty">
                <input type="number" min="0" value="1" class="form-control item-qty">
              </div>
  						<a href="<?php echo e(base_url('id/cart/?code='.$code)); ?>" onclick="addCart('<?php echo e($code); ?>')" class="addtocart" title="Add to Cart">
  							<i class="fa fa-shopping-cart"></i>
  							<span>Add to Cart</span>
  						</a>

  						<div class="actions-right">
  							<a href="#" class="addtowishlist" title="Add to Wishlist">
  								<i class="fa fa-heart"></i>
  							</a>
  							<a href="#" class="comparelink" title="Add to Compare">
  								<i class="glyphicon glyphicon-signal"></i>
  							</a>
  						</div>
  					</div>

						<div class="product-share-box">
							<div class="addthis_inline_share_toolbox"></div>

						</div>
					</div>
				</div>
			</div>
			<div class="tabs product-tabs">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#product-desc" data-toggle="tab">Description</a>
					</li>
					<li>
						<a href="#product-add" data-toggle="tab">Additional</a>
					</li>
					<li>
						<a href="#product-tags" data-toggle="tab">Tags</a>
					</li>
					<li>
						<a href="#product-reviews" data-toggle="tab">Reviews</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="product-desc" class="tab-pane active">
						<div class="product-desc-area">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<ul>
								<li>Simple, Configurable (e.g. size, color, etc.), Bundled and Grouped Products</li>
								<li>Downloadable/Digital Products, Virtual Products</li>
								<li>Inventory Management with Backordered items</li>
								<li>Customer Personalized Products - upload text for embroidery, monogramming, etc.</li>
								<li>Create Store-specific attributes on the fly</li>
								<li>Advanced Pricing Rules and support for Special Prices</li>
								<li>Tax Rates per location, customer group and product type</li>
							</ul>
						</div>
					</div>
					<div id="product-add" class="tab-pane">
						<table class="product-table">
							<tbody>
								<tr>
									<td class="table-label">Color</td>
									<td>Black</td>
								</tr>
								<tr>
									<td class="table-label">Size</td>
									<td>16mx24mx18m</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="product-tags" class="tab-pane">
						<div class="product-tags-area">
							<form action="#">
								<div class="form-group">
									<label>Add Your Tags:</label>
									<div class="clearfix">
										<input type="text" class="form-control pull-left" required>
										<input type="submit" class="btn btn-primary" value="Add Tags">
									</div>
								</div>
							</form>
							<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
						</div>
					</div>
					<div id="product-reviews" class="tab-pane">
						<div class="collateral-box">
							<ul class="list-unstyled">
								<li>Be the first to review this product</li>
							</ul>
						</div>

						<div class="add-product-review">
							<h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
							<p>How do you rate this product? *</p>

							<form action="#">
								<table class="ratings-table">
									<thead>
										<tr>
											<th>&nbsp;</th>
											<th>1 star</th>
											<th>2 stars</th>
											<th>3 stars</th>
											<th>4 stars</th>
											<th>5 stars</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Quality</td>
											<td>
												<input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
											</td>
											<td>
												<input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
											</td>
											<td>
												<input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
											</td>
											<td>
												<input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
											</td>
											<td>
												<input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
											</td>
										</tr>
										<tr>
											<td>Value</td>
											<td>
												<input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
											</td>
											<td>
												<input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
											</td>
											<td>
												<input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
											</td>
											<td>
												<input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
											</td>
											<td>
												<input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
											</td>
										</tr>
										<tr>
											<td>Price</td>
											<td>
												<input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
											</td>
											<td>
												<input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
											</td>
											<td>
												<input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
											</td>
											<td>
												<input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
											</td>
											<td>
												<input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
											</td>
										</tr>
									</tbody>
								</table>

								<div class="form-group">
									<label>Nickname<span class="required">*</span></label>
									<input type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Summary of Your Review<span class="required">*</span></label>
									<input type="text" class="form-control" required>
								</div>
								<div class="form-group mb-xlg">
									<label>Review<span class="required">*</span></label>
									<textarea cols="5" rows="6" class="form-control"></textarea>
								</div>

								<div class="text-right">
									<input type="submit" class="btn btn-primary" value="Submit Review">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h2 class="slider-title">
        <span class="inline-title">Also Purchased</span>
        <span class="line"></span>
    </h2>

    <div class="owl-carousel owl-theme" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}">
			<div class="product">
				<figure class="product-image-area">
					<a href="#" title="Product Name" class="product-image">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product1.jpg" alt="Product Name">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product1-2.jpg" alt="Product Name" class="product-hover-image">
					</a>

					<a href="#" class="product-quickview">
						<i class="fa fa-share-square-o"></i>
						<span>Quick View</span>
					</a>
					<div class="product-label"><span class="discount">-10%</span></div>
					<div class="product-label"><span class="new">New</span></div>
				</figure>
				<div class="product-details-area">
					<h2 class="product-name"><a href="#" title="Product Name">Noa Sheer Blouse</a></h2>
					<div class="product-ratings">
						<div class="ratings-box">
							<div class="rating" style="width:60%"></div>
						</div>
					</div>

					<div class="product-price-box">
						<span class="old-price">$99.00</span>
						<span class="product-price">$89.00</span>
					</div>

					<div class="product-actions">
						<a href="#" class="addtowishlist" title="Add to Wishlist">
							<i class="fa fa-heart"></i>
						</a>
						<a href="#" class="addtocart" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
							<span>Add to Cart</span>
						</a>
						<a href="#" class="comparelink" title="Add to Compare">
							<i class="glyphicon glyphicon-signal"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="product">
				<figure class="product-image-area">
					<a href="#" title="Product Name" class="product-image">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product2.jpg" alt="Product Name">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product2-2.jpg" alt="Product Name" class="product-hover-image">
					</a>

					<a href="#" class="product-quickview">
						<i class="fa fa-share-square-o"></i>
						<span>Quick View</span>
					</a>
					<div class="product-label"><span class="discount">-25%</span></div>
				</figure>
				<div class="product-details-area">
					<h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
					<div class="product-ratings">
						<div class="ratings-box">
							<div class="rating" style="width:0%"></div>
						</div>
					</div>

					<div class="product-price-box">
						<span class="old-price">$120.00</span>
						<span class="product-price">$90.00</span>
					</div>

					<div class="product-actions">
						<a href="#" class="addtowishlist" title="Add to Wishlist">
							<i class="fa fa-heart"></i>
						</a>
						<a href="#" class="addtocart" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
							<span>Add to Cart</span>
						</a>
						<a href="#" class="comparelink" title="Add to Compare">
							<i class="glyphicon glyphicon-signal"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="product">
				<figure class="product-image-area">
					<a href="#" title="Product Name" class="product-image">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product3.jpg" alt="Product Name">
					</a>

					<a href="#" class="product-quickview">
						<i class="fa fa-share-square-o"></i>
						<span>Quick View</span>
					</a>
				</figure>
				<div class="product-details-area">
					<h2 class="product-name"><a href="#" title="Product Name">Fashion Dress</a></h2>
					<div class="product-ratings">
						<div class="ratings-box">
							<div class="rating" style="width:60%"></div>
						</div>
					</div>

					<div class="product-price-box">
						<span class="product-price">$70.00</span>
					</div>

					<div class="product-actions">
						<a href="#" class="addtowishlist" title="Add to Wishlist">
							<i class="fa fa-heart"></i>
						</a>
						<a href="#" class="addtocart" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
							<span>Add to Cart</span>
						</a>
						<a href="#" class="comparelink" title="Add to Compare">
							<i class="glyphicon glyphicon-signal"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="product">
				<figure class="product-image-area">
					<a href="#" title="Product Name" class="product-image">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product4.jpg" alt="Product Name">
					</a>

					<a href="#" class="product-quickview">
						<i class="fa fa-share-square-o"></i>
						<span>Quick View</span>
					</a>
					<div class="product-label"><span class="discount">-20%</span></div>
				</figure>
				<div class="product-details-area">
					<h2 class="product-name"><a href="#" title="Product Name">Fashion Sweater</a></h2>
					<div class="product-ratings">
						<div class="ratings-box">
							<div class="rating" style="width:80%"></div>
						</div>
					</div>

					<div class="product-price-box">
						<span class="old-price">$100.00</span>
						<span class="product-price">$90.00</span>
					</div>

					<div class="product-actions">
						<a href="#" class="addtowishlist" title="Add to Wishlist">
							<i class="fa fa-heart"></i>
						</a>
						<a href="#" class="addtocart" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
							<span>Add to Cart</span>
						</a>
						<a href="#" class="comparelink" title="Add to Compare">
							<i class="glyphicon glyphicon-signal"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="product">
				<figure class="product-image-area">
					<a href="#" title="Product Name" class="product-image">
						<img src="<?php echo e(base_url()); ?>assets/img/demos/shop/products/product11.jpg" alt="Product Name">
					</a>

					<a href="#" class="product-quickview">
						<i class="fa fa-share-square-o"></i>
						<span>Quick View</span>
					</a>
				</figure>
				<div class="product-details-area">
					<h2 class="product-name"><a href="#" title="Product Name">Woman Shee Blouse</a></h2>
					<div class="product-ratings">
						<div class="ratings-box">
							<div class="rating" style="width:0%"></div>
						</div>
					</div>

					<div class="product-price-box">
						<span class="product-price">$70.00</span>
					</div>

					<div class="product-actions">
						<a href="#" class="addtowishlist" title="Add to Wishlist">
							<i class="fa fa-heart"></i>
						</a>
						<a href="#" class="addtocart" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
							<span>Add to Cart</span>
						</a>
						<a href="#" class="comparelink" title="Add to Compare">
							<i class="glyphicon glyphicon-signal"></i>
						</a>
					</div>
				</div>
			</div>
    </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.front.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>