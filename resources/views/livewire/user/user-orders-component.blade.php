<div>
  <style>
    nav svg {
      height: 20px;
    }
    nav .hidden {
      display: block !important;
    }
  </style>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">All Orders</div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Order Id</th>
                  <th>Subtotal</th>
                  <th>Tax</th>
                  <th>Total</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Zip Code</th>
                  <th>Status</th>
                  <th>Order Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>$188</td>
                  <td>${{ $order->tax }}</td>
                  <td>${{ $order->total }}</td>
                  <td>{{ $order->firstname }}</td>
                  <td>{{ $order->lastname }}</td>
                  <td>{{ $order->mobile }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->zipcode }}</td>
                  <td>{{ $order->status }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td>
                    <a href="{{ route('devi', $order->id) }}" target="_blank" class="btn btn-primary btn-sm">Devis</a>
                    <a href="{{ route('user.orderdetails', $order->id) }}" class="btn btn-danger btn-sm">Details</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $orders->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
