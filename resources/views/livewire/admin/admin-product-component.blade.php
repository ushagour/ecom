{{-- <section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">All products</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('assets/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf')}}">
            <thead>
                <tr>
                   <th>Name</th>
                   <th>Image</th>
                   <th>Price</th>
                   <th>Stock</th>
                   <th>Category</th>
                   <th>Date</th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($products->count()>0)
                @foreach($products as $product)
                <tr class="gradeX">
                    <td>{{$product->name}}</td>
                    <td><img src="{{ asset('assets/images/products').'/'.$product->image}}" width="60" alt="{{$product->name}}"></td>
                    <td>{{$product->regular_price}}</td>
                    <td>{{$product->stock_status}}</td>
                    <td class="center hidden-phone">{{$product->category->name}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>--</td>
                </tr>
                @endforeach
                @endif

      
            </tbody>
        </table>
    </div>
</section> --}}
<section role="main" class="content-body">

    <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
        
        
                <h2 class="panel-title">Products</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped" id="datatable-ajax" data-url="http://localhost:8000/api/products">
                    <thead>
                        <tr>
                           <th>Name</th>
                           <th>Price</th>
                           <th>Stock</th>
                           <th>Category</th>
                           <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </section>
    <!-- end: page -->
</section>