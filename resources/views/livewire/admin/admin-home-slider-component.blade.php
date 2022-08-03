<section class="panel">
    <header class="panel-heading">


        <a href="{{route("add.sliders")}}" class="btn btn-primary pull-right " style="margin-bottom: 12px;"> Add new homeslider </a>

    </header>
    <div class="panel-body">
	



       <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{ asset('assets/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf')}}">
            <thead>
                <tr>
                   <th>title</th>
                   <th>subtitle</th>
                   <th>price</th>
                   <th>link</th>
                   <th>image</th>
                   <th>status</th>
                   <th>created At </th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                  @if($homesliders->count()>0)
                        @foreach($homesliders as $homeslider)
                        <tr class="gradeX">
                            <td>{{$homeslider->title}}</td>
                            <td>{{$homeslider->subtitle}}</td>
                            <td>{{$homeslider->price}}</td>
                            <td>{{$homeslider->link}}</td>
                            <td><img src="{{ asset('assets/images/slider').'/'.$homeslider->image}}" width="60" alt="{{$homeslider->name}}"></td>
                            <td>{{($homeslider->status)?"active":"inactive" }}</td>
                            <td>{{$homeslider->created_at}}</td>
                            <td class="actions">
                                <a href="{{route('edit.sliders',["id"=>$homeslider->id])}}" class="on-default edit-row lg"><i class="fa fa-pencil fa-2x text-primary"></i></a>
                                <a  wire:click.prevent="Deletehomeslider({{$homeslider->id}})" class="on-default remove-row"><i class="fa fa-trash-o fa-2x text-danger"></i></a>
                            </td>                    
                            </tr>
                        @endforeach
                        @endif

      
            </tbody>
        </table>
        <div class="wrap-pagination-info">
            {{$homesliders->links()}}

        </div>
    </div>
</section>
