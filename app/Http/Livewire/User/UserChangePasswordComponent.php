<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserChangePasswordComponent extends Component
{
  public $current_password, $password, $password_confirmation;

  public function changePassword()
  {
    $this->validate([
      'current_password' => 'required',
      'password' => 'required|min:5|confirmed|different:current_password',
      'password_confirmation' => 'required',
    ]);

    if (Hash::check($this->current_password, Auth::user()->password)) {
      $user = User::findOrFail(Auth::user()->id);
      $user->password = Hash::make($this->password);
      $user->save();
      session()->flash('password_success', 'Password has been changed.');
    } else {
      session()->flash('password_error', 'Password does not match.');
    }
  }

  public function updated($fields)
  {
    $this->validateOnly($fields, [
      'current_password' => 'required',
      'password' => 'required|min:5|confirmed|different:current_password',
      'password_confirmation' => 'required',
    ]);
  }

  public function render()
  {
    return view('livewire.user.user-change-password-component')->layout('layouts.base');
  }
}
