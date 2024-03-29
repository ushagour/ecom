<div>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">Order Details</div>
              <div class="col-md-6">
                <a href="{{ route('admin.orders') }}" class="btn btn-danger pull-right">All Order(s)</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th>Order Id</th>
                <td>{{ $order->id }}</td>
                <th>Order Date</th>
                <td>{{ $order->created_at }}</td>
                <th>Status</th>
                <td>{{ $order->status }}</td>
                @if ($order->status == 'delivered')
                  <th>Delivery Date</th>
                  <td>{{ $order->delivered_date }}</td>
                  @elseif(($order->status == 'canceled'))
                  <th>Cancel Date</th>
                  <th>{{ $order->canceled_at }}</th>
                @endif
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">Ordered Item(s)</div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="wrap-iten-in-cart">
              <h3 class="box-title">Products Name</h3>
              <ul class="products-cart">
              @foreach ($order->orderItems as $item)
                <li class="pr-cart-item">
                  <div class="product-image">
                    <figure><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" alt="{{ $item->product->image }}"></figure>
                  </div>
                  <div class="product-name">
                    <a class="link-to-product" href="{{ route('product.details', $item->product->slug) }}">{{ $item->product->name }}</a>
                  </div>
                  @if ($item->options)
                    <div class="product-name">
                      @foreach (unserialize($item->options) as $key => $value)
                        <p><b>{{ $key }} : {{ $value }}</b></p>
                      @endforeach
                    </div>
                  @endif
                  <div class="price-field produtc-price"><p class="price">${{ $item->price }}</p></div>
                  <div class="quantity">
                    <h5>{{ $item->quantity }}</h5>
                  </div>
                  <div class="price-field sub-total"><p class="price">${{ $item->price * $item->quantity }}</p></div>
                </li>
              @endforeach
              </ul>
            </div>
            <div class="summary">
              <div class="order-summary">
                <h4 class="title-box">Order Summary</h4>
                <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{ $order->subtotal }}</b></p>
                <p class="summary-info"><span class="title">Tax</span><b class="index">${{ $order->tax }}</b></p>
                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                <p class="summary-info"><span class="title">Total</span><b class="index">${{ $order->total }}</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Billing Details</div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th>First Name</th>
                <td>{{ $order->firstname }}</td>
                <th>Last Name</th>
                <td>{{ $order->lastname }}</td>
              </tr>
              <tr>
                <th>Phone Number</th>
                <td>{{ $order->mobile }}</td>
                <th>Email</th>
                <td>{{ $order->email }}</td>
              </tr>
              <tr>
                <th>Address</th>
                <td>{{ $order->line1 }}</td>
                <th>Address 2</th>
                <td>{{ $order->line2 }}</td>
              </tr>
              <tr>
                <th>City</th>
                <td>{{ $order->city }}</td>
                <th>Province</th>
                <td>{{ $order->province }}</td>
              </tr>
              <tr>
                <th>Country</th>
                <td>{{ $order->country }}</td>
                <th>Zipcode</th>
                <td>{{ $order->zipcode }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    @if ($order->is_shipping_different)
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">Shipping Details</div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>First Name</th>
                  <td>{{ $order->shipping->firstname }}</td>
                  <th>Last Name</th>
                  <td>{{ $order->shipping->lastname }}</td>
                </tr>
                <tr>
                  <th>Phone Number</th>
                  <td>{{ $order->shipping->mobile }}</td>
                  <th>Email</th>
                  <td>{{ $order->shipping->email }}</td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td>{{ $order->shipping->line1 }}</td>
                  <th>Address 2</th>
                  <td>{{ $order->shipping->line2 }}</td>
                </tr>
                <tr>
                  <th>City</th>
                  <td>{{ $order->shipping->city }}</td>
                  <th>Province</th>
                  <td>{{ $order->shipping->province }}</td>
                </tr>
                <tr>
                  <th>Country</th>
                  <td>{{ $order->shipping->country }}</td>
                  <th>Zipcode</th>
                  <td>{{ $order->shipping->zipcode }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Transaction</div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th>Transaction Mode</th>
                <td>{{ $order->transaction->mode }}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>{{ $order->transaction->status }}</td>
              </tr>
              <tr>
                <th>Transaction Date</th>
                <td>{{ $order->transaction->created_at }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
