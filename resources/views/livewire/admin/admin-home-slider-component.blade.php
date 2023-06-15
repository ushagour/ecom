<div>
  <div class="container" style="padding: 30px 0;">
    <div class="row">
      <div class="col-md-12 panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-6">
              All Slides
            </div>
            <div class="col-md-6">
              <a href="{{ route('add.sliders') }}" class="btn btn-danger pull-right">Add New Slide</a>
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
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Price</th>
                <th>Link</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($HomeSliders as $slider)
                <tr>
                  <td>{{ $slider->id }}</td>
                  <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" alt="{{ $slider->image }}" width="150"></td>
                  <td>{{ $slider->title }}</td>
                  <td>{{ $slider->subtitle }}</td>
                  <td>{{ $slider->price }}</td>
                  <td>{{ $slider->link }}</td>
                  <td>{{ $slider->status == 1 ? 'Active' : 'Inactive' }}</td>
                  <td>{{ $slider->created_at }}</td>
                  <td>
                    <a href="{{ route('edit.sliders', $slider->id) }}">Edit</a>
                    <a href="" wire:click.prevent="deleteSlide({{ $slider->id }})">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
