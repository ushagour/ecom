<section class="panel">
    <header class="panel-heading">


        <a href="{{route("add.product")}}" class="btn btn-primary pull-right " style="margin-bottom: 12px;"> Add new product </a>

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
                            <td class="actions">
                            
                                <a href="{{route('edit.product',["product_slug"=>$product->slug])}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>                    
                            </tr>
                        @endforeach
                        @endif

      
            </tbody>
        </table>
        <div class="wrap-pagination-info">
            {{$products->links()}}

        </div>
    </div>
</section>
