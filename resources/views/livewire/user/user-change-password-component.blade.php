<div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Change Password
          </div>
          <div class="panel-body">
            @if (Session::has('password_success'))
              <div class="alert alert-success" role="alert">{{ Session::get('password_success') }}</div>
            @endif
            @if (Session::has('password_error'))
              <div class="alert alert-danger" role="alert">{{ Session::get('password_error') }}</div>
            @endif
            <form action="" class="form-horizontal" autocomplete="off" wire:submit.prevent="changePassword">
              <div class="form-group">
                <label for="current_password" class="col-md-4 control-label">Current Password</label>
                <div class="col-md-4">
                  <input type="password" name="current_password" id=current_"password" placeholder="Current Passowrd" class="form-control input-md" autofocus wire:model="current_password">
                  @error('current_password') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-md-4 control-label">New Password</label>
                <div class="col-md-4">
                  <input type="password" name="password" id="password" placeholder="New Passowrd" class="form-control input-md" wire:model="password">
                  @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-4">
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Passowrd" class="form-control input-md" wire:model="password_confirmation">
                  @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
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
