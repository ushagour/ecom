<div>
  <style>
    nav svg {
      height: 20px;
    }
    nav .hidden {
      display:  block !important;
    }
    .sclist {
      list-style: none;
      margin-left: -35px;
    }
    .sclist li {
      line-height: 30px;
    }
    .slink i {
      font-size: 15px;
    }
  </style>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6">
                All Categories
              </div>
              <div class="col-md-6">
                <a href="" style="background-color:#9f1a4e;" class="btn btn-danger pull-right">Add New</a>
              </div>
            </div>
          </div>
          <div class="panel-body">
            @if (Session::has('message'))
              <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Category</th>
                  <th>Slug</th>
                  <th>Sub Category</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                      <ul class="sclist">
                        @foreach ($category->subCategories as $scategory)
                          <li>
                            <i class="fa fa-caret-right"></i> {{ $scategory->name }}
                            <a href="{{ route('admin.editSubCategories', [$category->slug, $scategory->slug]) }}" class="slink"><i class="fa fa-edit"></i></a>
                            <a href="" wire:click.prevent="deleteSubCategory({{ $scategory->id }})" onclick="confirm('Do you want to delete category id no. {{ $loop->iteration }}?') || event.stopImmediatePropagation" class="slink"><i class="fa fa-times text-center"></i></a>
                          </li>
                        @endforeach
                      </ul>
                    </td>
                    <td>
                      <a href="{{ route('admin.editcategories', $category->slug) }}">Edit</a> | 
                      <a href="" onclick="confirm('Do you want to delete sub category id no. {{ $loop->iteration }}?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $category->id }})">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $categories->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
