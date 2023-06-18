<div>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">
                Add New Slide
              </div>
              <div class="col-md-6">
                <a href="{{ route('admin.homeslider') }}" class="btn btn-danger pull-right">All Slides</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if (Session::has('message'))
              <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <form action="" class="form-horizontal" wire:submit.prevent="addSlide" autocomplete="off">
              <div class="form-group">
                <label for="title" class="col-md-4 control-label">Title</label>
                <div class="col-md-4">
                  <input type="text" name="title" id="title" class="form-control input-md" wire:model="title" autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="subtitle" class="col-md-4 control-label">Subtitle</label>
                <div class="col-md-4">
                  <input type="text" name="subtitle" id="subtitle" class="form-control input-md" wire:model="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="price" class="col-md-4 control-label">Price</label>
                <div class="col-md-4">
                  <input type="text" name="price" id="price" class="form-control input-md" wire:model="price">
                </div>
              </div>
              <div class="form-group">
                <label for="link" class="col-md-4 control-label">Link</label>
                <div class="col-md-4">
                  <input type="text" name="link" id="link" class="form-control input-md" wire:model="link">
                </div>
              </div>
              <div class="form-group">
                <label for="image" class="col-md-4 control-label">Image</label>
                <div class="col-md-4">
                  <input type="file" name="image" id="image" class="input-file" wire:model="image">
                  @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" width="120" alt="{{ $image->temporaryUrl() }}">
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="status" class="col-md-4 control-label">Status</label>
                <div class="col-md-4">
                  <select name="status" id="status" class="form-control" wire:model="status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
