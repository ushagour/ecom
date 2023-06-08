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
                   <th>Sub categories</th>
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
                            <td class="center hidden-phone">{{$product->category->subCategories}}</td>
                            <td>{{$product->created_at}}</td>
                            <td class="actions">
                                <a href="{{route('edit.product',["product_slug"=>$product->slug])}}" class="on-default edit-row lg"><i class="fa fa-pencil fa-2x text-primary"></i></a>
                                <a  wire:click.prevent="DeleteProduct({{$product->id}})" class="on-default remove-row"><i class="fa fa-trash-o fa-2x text-danger"></i></a>
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
