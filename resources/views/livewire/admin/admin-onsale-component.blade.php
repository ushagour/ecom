
@push('more_style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

@endpush

<section class="panel">
    <header class="panel-heading">

       <center> <h2 class="panel-title">Manage Home OnSale products </h2></center> 
    </header>
    <div class="panel-body">
        <form class="form-horizontal form-bordered form-bordered" method="POST"
            wire:submit.prevent="UpdateSale">
            <div class="form-group">
                <label class="col-md-3 control-label" for="sale_date">On sale date </label>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class='input-group date' id='sale_date'>
                           <input type='text' class="form-control"  placeholder="Y-MM-DD h:m:s" id="sale_date" wire:model="sale_date"/>
                           <span class="input-group-addon">
                           <span class="fa fa-calendar"></span>
                           </span>
                        </div>
                     </div>

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="status"> status</label>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control input-sm mb-md" wire:model="status">
                            <option value="0">inactive</option>
                            <option value="1">active</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">

                <input type="submit" class="btn btn-primary" value="add">
                <input type="reset" class="p-2 btn btn-danger" value="reset">
            </div>

        </form>
    </div>
</section>
@push('more_scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>


<script>
    // Your JS here.
$(document).ready(function(){
    $(function () {
             $('#sale_date').datetimepicker({

                 format:'Y-MM-DD h:m:s',
             }
             ).on("dp.change",function(ev){
                var data =$('#sale_date').val();
                @this.set("sale_date",data);
             });
         });

});

</script>
@endpush