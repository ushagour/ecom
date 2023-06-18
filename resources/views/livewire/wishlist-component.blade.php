
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Wishlist</span></li>
				</ul>
			</div>


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

  
    @if (Cart::instance("wishlist")->content()->count()>0)
    <ul class="product-list grid-products equal-container">
         
        @foreach(Cart::instance("wishlist")->content() as $product)
		<li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="{{route('product.details',['slug'=>$product->model->slug])}}" title="{{$product->model->name}}">
                        <figure><img src="{{ asset('assets/images/products')}}/{{$product->model->image}}" alt="{{$product->model->name}}"></figure>
                    </a>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>{{$product->model->name}}</span></a>
                    <div class="wrap-price"><span class="product-price">${{$product->model->regular_price}}</span></div>
                    <a href="#" class="btn add-to-cart" wire:click.prevent="moveProductFromWishlistToCart('{{$product->rowId}}')">Move To Cart</a>
                    <div class="product-wish">
                               <a href="#" wire:click.prevent="removeFromWishList({{$product->model->id}},'{{$product->model->name}}',{{$product->model->regular_price}})">
                            <i class="fa fa-heart full-heart" ></i>
                        </a>
                    </div>
                </div>
            </div>
        </li>

        @endforeach
    </ul>
    @else

                     <p style="text-align:center;"> no product on wishlist !</p>

    @endif

</div>
</div>
</main>