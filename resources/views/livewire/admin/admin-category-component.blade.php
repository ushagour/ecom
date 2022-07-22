<section class="panel">
    <header class="panel-heading">

    </header>
    <div class="panel-body">
        <section class="panel">
            <header class="panel-heading">

               <center> <h2 class="panel-title">all Categories </h2></center> 
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered form-bordered" method="POST"
                    wire:submit.prevent="saveCategory">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">name</label>
                        <div class="col-md-6">
                            <input class="form-control" data-plugin-maxlength maxlength="20" wire:model="name"
                                wire:keydown="GenerateSlug" />
                            <p>
                                <code>max-length</code> set to 20.
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">slug</label>
                        <div class="col-md-6">
                            <input class="form-control" data-plugin-maxlength maxlength="20" wire:model="slug" />
                            <p>
                                <code>max-length</code> set to 20.
                            </p>
                        </div>
                    </div>
                    <div class="pull-right">

                        <input type="submit" class="btn btn-primary" value="add">
                        <input type="reset" class="p-2 btn btn-danger" value="reset">
                    </div>

                </form>
            </div>
        </section>

        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th></th>
                    <th>name</th>
                    <th>slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($categories->count()>0)

                @foreach($categories as $category)
                <tr class="gradeU">
                    <td> {{$category->id}}</td>
                    <td> {{$category->name}}</td>
                    <td> {{$category->slug}}</td>

                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>

                        <a data-toggle="modal" data-target="#myModal{{$category->id}}"
                            class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>


                <!-- Modal -->
                <div id="myModal{{$category->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> Category : {{$category->name}} </h4>
                            </div>
                            <div class="modal-body">
                                
                                <form class="form-horizontal form-bordered form-bordered" method="POST"
                                wire:submit.prevent="saveCategory">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" >name </label>
                                        
                                        <input type="text" class="col-md-6 form-control" maxlength="20"
                                        value="{{$category->name}}" />
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" >slug</label>
                                        <input type="text"class="col-md-6 form-control" maxlength="20"
                                        value="{{$category->slug}}" />
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
                            <td class="text-center" colspan="5"> no category yet !</td>
                        </tr>
                        @endif


            </tbody>
        </table>
        <div class="wrap-pagination-info">
            {{$categories->links()}}

        </div>

    </div>

    <!-- Button trigger modal -->




</section>
