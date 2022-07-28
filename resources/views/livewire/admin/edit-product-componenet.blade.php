<div>
    <section class="panel">

        @if (Session::has('success_info'))

        <div class="alert alert-success" role="alert">
            <strong>{{Session::get('success_info')}}</strong>
        </div>
        @endif
        <div class="panel-body">
            <form class="form-horizontal form-bordered" enctype="multipart/form-data" wire:submit.prevent="UpdateProduct">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name" on>name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" wire:model="name" wire:keydown="GenerateSlug">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="slug">slug</label>
                    <div class="col-md-6">
                        <input class="form-control" id="slug" type="text" wire:model="slug" disabled="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="short_description"> Short Description</label>
                    <div class="col-md-6">
                        <input class="form-control" data-plugin-maxlength maxlength="20" id="short_description"
                            wire:model="short_description" />
                        <p>
                            <code>max-length</code> set to 20.
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="short_description"> Description</label>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"
                            wire:model="description"></textarea>
                        <p>
                            <code>max-length</code> set to 140.
                        </p>
                    </div>
                </div>

                {{-- <div class="form-group">
                    <label class="col-md-3 control-label" for="inputReadOnly">Read-Only Input</label>
                    <div class="col-md-6">
                        <input type="text" value="Read-Only Input" id="inputReadOnly" class="form-control" readonly="readonly">
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="col-md-3 control-label">price</label>
                    <div class="col-md-6">
                        <div class="input-group mb-md">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" wire:model="regular_price">
                            <span class="input-group-addon ">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">SKU</label>
                    <div class="col-md-6">
                        <div class="input-group mb-md">
                            <input type="text" class="form-control" wire:model="SKU">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">stock</label>
                    <div class="col-md-2">
                        <select class="form-control input-sm mb-md" wire:model="stock_status">
                            <option value="instock">instock</option>
                            <option value="outofstock">outofstock</option>
                        </select>

                 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Featured</label>
                    <div class="col-md-2">
                        <select class="form-control input-sm mb-md" wire:model="featured">
                            <option value="1">instock</option>
                            <option value="0">outofstock</option>
                        </select>

                 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Quantity</label>
                    <div class="col-md-6">
                        <div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
                            <div class="input-group" style="width:150px;">
                                <input type="text" class="spinner-input form-control" maxlength="3" wire:model="quantity">
  
                            </div>
                        </div>
                        <p>
                            with <code>max</code> value set to 10
                        </p>
             
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Select sizing</label>
                    <div class="col-md-6">
                        <select class="form-control input-sm mb-md" wire:model="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">File Upload</label>
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
                                    <input type="file" wire:model="newimage"/>

                                </span>
                                @if ($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" alt="" width="120">
                                @else
                                <img src="{{ asset('assets/images/products/'.$image)}}" alt="" width="120">

                                @endif                            
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>
