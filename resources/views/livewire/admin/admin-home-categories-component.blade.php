@push('more_style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

<section class="panel">
    <header class="panel-heading">

       <center> <h2 class="panel-title">Manage Home Categories </h2></center> 
    </header>
    <div class="panel-body">
        <form class="form-horizontal form-bordered form-bordered" method="POST"
            wire:submit.prevent="updatecat">
            <div class="form-group">
                <label class="col-md-3 control-label" for="textareaDefault">chose Categories</label>
                <div class="col-md-6" wire:ignore>
                    <select id="multiple_categories" multiple data-role="tagsinput" name="categories[]" wire:model="selected_categories" class="form-control">
                       
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>

                        @endforeach
              
                    </select>
                 
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="textareaDefault">no of products  </label>
                <div class="col-md-6">
                    <input class="form-control"  wire:model="no_of_products" />
                
                </div>
            </div>
            <div class="pull-right">

                <input type="submit" class="btn btn-primary" value="add">
                <input type="reset" class="p-2 btn btn-danger" value="reset">
            </div>

        </form>
    </div>
</section>
@push('more_scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script><link rel="stylesheet" href="{{ asset('assets/adminvendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
<script>
    // Your JS here.
$(document).ready(function(){
$('#multiple_categories').select2();
$('#multiple_categories').on("change",function(e) {
    
    var data = $('#multiple_categories').val();
    @this.set("selected_categories",data);
});



});

</script>
@endpush