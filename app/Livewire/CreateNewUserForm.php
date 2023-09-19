<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Lazy;
use Livewire\Component;

class CreateNewUserForm extends Component
{
    public  $fullname;
    public  $user_id;
    public  $gender = "0";

    protected $rules = [
        'fullname' => ['required', 'regex:/^[A-Za-z\s.]+$/'],
        'user_id' => ['required', 'unique:users', 'regex:/^[A-Za-z0-9@#_]+$/']
    ];

    public function placeholder()
    {
        return view('partials.loading');
    }

    public function save()
    {

        $this->validate();

        User::create([
            'fullname' => $this->fullname,
            'user_id' => $this->user_id,
            'gender' => $this->gender,
            'role' => '1',
            'status' => '1',
            'password' => Hash::make('GAD-2023')
        ]);

        $this->fullname = '';
        $this->user_id = '';

        session()->flash('success', 'New user has been created!');
    }
    #[Lazy]
    public function render()
    {
        return view('livewire.create-new-user-form');
    }
}
