<div>
  <style>
    nav svg {
      height: 20px;
    }
    nav .hidden {
      display: block !important;
    }
  </style>
  <div class="container" style="padding: 30px 0">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-5">All Products</div>
              <div class="col-md-5">
                <a href="{{ route('add.product') }}" class="btn btn-danger pull-right">Add New</a>
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Search something..." wire:model="searchTerm">
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if (Session::has('message'))
              <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>Sale Price</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->image }}" width="100"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock_status }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                      <a href="{{ route('edit.product', $product->slug) }}">Edit</a> | 
                      <a href="" onclick="confirm('Are you sure that you want to delete {{ $product->name }}?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
