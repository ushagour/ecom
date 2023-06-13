	
	@push("more_style")
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.css')}}" />
	@endpush
	

	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Shop</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="{{ asset('assets/images/shop-banner.jpg')}}" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">All products </h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting">
									<option value="defult" selected="selected">Default sorting</option>
									<option value="date">Sort by newness</option>
									<option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize" >
									<op
									tion value="12" selected="selected">12 per page</op>
									<option value="16">16 per page</option>
									<option value="18">18 per page</option>
									<option value="21">21 per page</option>
									<option value="24">24 per page</option>
									<option value="30">30 per page</option>
									<option value="32">32 per page</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
								<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
							</div>

						</div>

					</div><!--end wrap shop control-->

					<style>
						.product-wish{
							top:10%;
							position: absolute;
							left: 0;
							z-index: 99;
							right:30px;
							text-align: right;
							padding-top: 0;
						}
						.product-wish .fa{
							color: gray;
							font-size: 23px;
						}
						.product-wish .fa:hover{
							color: red;
						}
						.product-wish .fa.full-heart{
							color: red;
						}
			
					</style>
				 
					<div class="row">

						<ul class="product-list grid-products equal-container">
							@php
								$items = Cart::instance("wishlist")->content()->pluck("id"); // return object of instance wishlist 
							@endphp
							@foreach($products as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
											<figure><img src="{{ asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{$product->name}}</span></a>
										<div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="addToCart({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add To Cart</a>
										<div class="product-wish">
											@if($items->contains($product->id))									
											<a href="#" wire:click.prevent="removeFromWishList({{$product->id}})">
												<i class="fa fa-heart full-heart" ></i>
											</a>
											@else
											<a href="#" wire:click.prevent="addToWishList({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
												<i class="fa fa-heart" ></i>
											</a>
											@endif	
										</div>
									</div>
								</div>
							</li>
							@endforeach
						

						</ul>

					</div>
			
					<div class="wrap-pagination-info">
						{{$products->links('vendor.pagination.custom')}}
					
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
						  <ul class="list-category">
							@foreach ($categories as $category)
							  <li class="category-item {{ count($category->subCategories) > 0 ? 'has-child-cate':'' }}">
								<a href="{{ route('product.category', ['category_slug' => $category->slug]) }}" class="cate-link">{{ $category->name }}</a>
								@if (count($category->subCategories) > 0)
								  <span class="toggle-control">+</span>
								  <ul class="sub-cate">
									@foreach ($category->subCategories as $scategory)
									  <li class="category-item">
										<a href="{{ route('product.category', ['category_slug' => $category->slug, 'scategory_slug' => $scategory->slug]) }}" class="cat-link"><i class="fa fa-caret-right"> {{ $scategory->name }}</i></a>
									  </li>
									@endforeach
								  </ul>
								@endif
							  </li>
							@endforeach
						  </ul>
						</div>
					  </div><!-- Categories widget-->

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brand</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								<li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
								<li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
								<li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
								<li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
								<li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
								<li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
								<li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
								<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div><!-- brand widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price <span class="text-info"> {{ "$" .$min_price.
						"- $"	.$max_price}}</span></h2>
						<div class="widget-content">
						<div  id="slider" wire:ignore></div>
						</div>
					</div><!-- Price-->
<br>
<br>
					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_1.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_17.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_18.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="{{ asset('assets/images/products/digital_20.jpg')}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
											<div class="wrap-price"><span class="product-price">$168.00</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>

	@push("more_scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>		

<script>

	var slider = document.getElementById("slider");

	// console.log(slider);
	// initiate noUiSlider
	noUiSlider.create(slider, {
    start: [1, 1000],
    connect: true,
    range: {
        'min': 1,
        'max': 1000
    },pips:{

		mode:"steps",
		stepped:true,
		density:4
	}
});
		slider.noUiSlider.on("update",function(value){


			@this.set("min_price",value[0]);
			@this.set("max_price",value[1]);

		})


</script>
	@endpush