

  
            <!-- start: page -->
                <section class="panel">
                    <header class="panel-heading">
         
                    </header>
                    <div class="panel-body">
                        <section class="panel">
                            <header class="panel-heading">
                
                                <h2 class="panel-title">Add Categories </h2>
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered form-bordered" wire:submit.prevent="saveCategory">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textareaDefault">name</label>
                                        <div class="col-md-6">
                                            <input class="form-control" data-plugin-maxlength maxlength="20" wire:model="name"  wire:keyup.prevent="GenerateSlug"/>
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
                                    <button type="submit" class="btn btn-primary">Add</button>
                             
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
                                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

                              
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
                
                </section>
            <!-- end: page -->




