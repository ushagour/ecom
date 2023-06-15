<div>
    <section class="panel">

        @if (Session::has('success_info'))

        <div class="alert alert-success" role="alert">
            <strong>{{Session::get('success_info')}}</strong>
        </div>
        @endif
        <div class="panel-body">
            <form class="form-horizontal form-bordered" enctype="multipart/form-data" wire:submit="SaveHomeSlider">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name" on>title</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" wire:model="title" >
                    </div>
                </div>

         

                <div class="form-group">
                    <label class="col-md-3 control-label" for="short_description">subtitle</label>
                    <div class="col-md-6">
                        <input class="form-control" data-plugin-maxlength maxlength="200" id="short_description"
                            wire:model="subtitle" />
                      
                    </div>
                </div>
      
       

                <div class="form-group">
                    <label class="col-md-3 control-label">price</label>
                    <div class="col-md-6">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" wire:model="price">
                            <span class="input-group-addon ">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">link</label>
                    <div class="col-md-6">
                        <div class="input-group mb-md">
                            <input type="text" class="form-control" wire:model="link">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">status</label>
                    <div class="col-md-2">
                        <select class="form-control input-sm mb-md" wire:model="status">
                            <option value="instock">active</option>
                            <option value="outofstock">inactive</option>
                        </select>

                 
                    </div>
                </div>
   

        
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-6">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                                <div class="uneditable-input">
                                    <i class="fa fa-file fileupload-exists"></i>
                                    <span class="fileupload-preview"></span>
                                </div>
                                <span class="btn btn-default btn-file">
                                    <span class="fileupload-exists">Change</span>
                                    <span class="fileupload-new">Select file</span>
                                    <input type="file" wire:model="image"/>

                                </span>
                                @if ($image)
                                <img src="{{$image->temporaryUrl()}}" alt="" width="120">
                                    
                                @endif
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                   <center><button type="submit" class="btn btn-danger">Submit</button></center>
                   
                  </div>            </form>
        </div>
    </section>
</div>
