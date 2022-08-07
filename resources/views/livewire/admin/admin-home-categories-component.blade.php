@push('more_style')
<link rel="stylesheet" href="{{ asset('assets/adminvendor/select2/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/adminvendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
@endpush

<section class="panel">
    <header class="panel-heading">

       <center> <h2 class="panel-title">Manage Home Categories </h2></center> 
    </header>
    <div class="panel-body">
        <form class="form-horizontal form-bordered form-bordered" method="POST"
            wire:submit.prevent="add">
            <div class="form-group">
                <label class="col-md-3 control-label" for="textareaDefault">chose Categories</label>
                <div class="col-md-6">
                    <select id="tags-input-multiple" multiple data-role="tagsinput" name="categories[]" wire:model="sel_categories" class="label label-primary form-control">
                       
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
<script>
    // Your JS here.
$(document).ready(function(){
$('#tags-input-multiple').select2();

});

</script>
<script src="{{ asset('assets/adminvendor/select2/select2.js')}}"></script>
<script src="{{ asset('assets/adminvendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
@endpush