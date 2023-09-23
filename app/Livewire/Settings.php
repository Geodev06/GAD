<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Settings extends Component
{
    public $user_id;
    public $fullname;
    public $gender;
    public $password;
    public $password_confirmation;
    public $old_password;

    public function save()
    {
        $this->validate(
            [
                'fullname' => 'required|regex:/^[^\s][a-zA-Z\s.]+$/',
                'old_password' => 'required',
                'password' => 'required|confirmed|min:8|max:50'
            ]
        );

        if (Hash::check($this->old_password, Auth::user()->password)) {
            User::where('user_id', $this->user_id)->update([
                'fullname' => $this->fullname,
                'gender' => $this->gender,
                'password' => Hash::make($this->password)
            ]);

            session()->flash('message', 'Changes has been saved!');

            $this->old_password = '';
            $this->password = '';
            $this->password_confirmation = '';
        } else {
            session()->flash('message-error', 'old password is incorrect');
        }
    }


    public function mount()
    {
        $this->user_id = Auth::user()->user_id;
        $this->fullname = Auth::user()->fullname;
        $this->gender = Auth::user()->gender;
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
