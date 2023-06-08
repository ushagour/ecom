
@push("more_style")
    <style>
        .error{
            color: red;

        }
    </style>
@endpush
<section class="panel">
    <header class="panel-heading">

    </header>
    <div class="panel-body">
        <section class="panel">
            <header class="panel-heading">

               <center> <h2 class="panel-title">all sub Categories </h2></center> 
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered form-bordered" method="POST"
                    wire:submit.prevent="saveSubCategory">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">name</label>
                        <div class="col-md-6">
                            <input class="form-control" data-plugin-maxlength maxlength="20" wire:model="name"
                                wire:keydown="GenerateSlug" />
                                <p>
                                    @error('name') <code class="error">{{ $message }}</code> @enderror
                                   </p>
                               
                      

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">slug</label>
                        <div class="col-md-6">
                            <input class="form-control" data-plugin-maxlength maxlength="20" wire:model="slug" />
                            <p>
                             @error('slug') <code class="error">{{ $message }}</code> @enderror
                            </p>
                        

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Categories</label>
                        <div class="col-md-6">

                            <select wire:model="category_id">
                                @foreach ($categories as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                             </select>

                        
                            @error('category_id') <span class="error">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <div class="pull-right">

                        <input type="submit" class="btn btn-primary" value="add">
                        <input type="reset" class="p-2 btn btn-danger" value="reset">
                    </div>

                </form>
            </div>
  

        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th></th>
                    <th>name</th>
                    <th>slug</th>
                    <th>category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($subcats->count()>0)

                @foreach($subcats as $subcat)
                <tr class="gradeU">
                    <td> {{$subcat->id}}</td>
                    <td> {{$subcat->name}}</td>
                    <td> {{$subcat->slug}}</td>
                    <td> {{$subcat->category->name}}</td>

                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>

                        <a data-toggle="modal" data-target="#myModal{{$subcat->id}}"
                            class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>


                <!-- Modal -->
                <div id="myModal{{$subcat->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> Category : {{$subcat->name}} </h4>
                            </div>
                            <div class="modal-body">
                                
                                <form class="form-horizontal form-bordered form-bordered" method="POST"
                                wire:submit.prevent="UpdateSubCategory">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" >name </label>
                                        
                                        <input type="text" class="col-md-6 form-control" maxlength="20"
                                        value="{{$subcat->name}}" />
                                        @error('name') <span class="error">{{ $message }}</span> @enderror

                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" >slug</label>
                                        <input type="text"class="col-md-6 form-control" maxlength="20"
                                        value="{{$subcat->slug}}" />
                                        @error('slug') <span class="error">{{ $message }}</span> @enderror

                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" >category</label>
                                         <select wire:model="category_id">
                                            @foreach ($categories as $item)
                                               <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                         </select>
                                      </div>
                                     
                           
                                    </div>
                                    </form>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-succesfly" value="edit">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                        </div>


                        @endforeach

                        @else

                        <tr>
                            <td class="text-center" colspan="5"> no sub category yet !</td>
                        </tr>
                        @endif


            </tbody>
        </table>
        <div class="wrap-pagination-info">
            {{$subcats->links()}}

        </div>

    </div>
</section>
    <!-- Button trigger modal -->




</section>
