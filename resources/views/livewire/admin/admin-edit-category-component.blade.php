<div>
  <div class="container" style="padding: 30px 0">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-6">Edit Category</div>
            <div class="col-md-6">
              <a href="{{ route('admin.categories') }}" class="btn btn-danger pull-right">All Categories</a>
            </div>
          </div>
        </div>
        <div class="panel-body">
          @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
          @endif
          <form action="" class="form-horizontal" autocomplete="off" wire:submit.prevent="updateCategory">
            <div class="form-group">
              <label for="categoryname" class="col-md-4 control-label">Category Name</label>
              <div class="col-md-4">
                <input type="text" id="categoryname" placeholder="Category Name" class="form-control input-md" autofocus wire:model="name" wire:keyup="generateslug">
                @error('name')<p class="text-danger">{{ $message }}</p>@enderror
              </div>
            </div>
            <div class="form-group">
              <label for="categoryslug" class="col-md-4 control-label">Category Slug</label>
              <div class="col-md-4">
                <input type="text" id="categoryslug" placeholder="Category Slug" class="form-control input-md" wire:model="slug" readonly>
                @error('slug')<p class="text-danger">{{ $message }}</p>@enderror
              </div>
            </div>
            <div class="form-group">
              <label for="categoryslug" class="col-md-4 control-label">Parent Category</label>
              <div class="col-md-4">
                <select name="" id="" class="form-control" wire:model="category_id">
                  <option value="">None</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-md-4 control-label"></label>
              <div class="col-md-4">
                <button type="submit" class="btn btn-danger">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div></div>
</div>
