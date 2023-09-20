<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $fullname;
    public $user_id;
    public $gender = 0;
    public $password;
    public $password_confirmation;

    public $terms;

    protected $rules = [
        'fullname' => 'required|regex:/^[a-zA-Z\s.]+$/',
        'user_id' => 'required|regex:/^[a-zA-Z0-9_-]+$/',
        'password' => 'required|min:8|confirmed',

    ];

    public $adminCount;

    public function mount()
    {
        $this->adminCount = User::where('role', 0)->count();
        if ($this->adminCount > 0) {
            return $this->redirect('/', navigate: true);
        }
    }

    public function placeholder()
    {
        return view('partials.placeholder');
    }

    public function save()
    {
        $this->validate();

        User::create([
            'fullname' => $this->fullname,
            'user_id' => $this->user_id,
            'role' => 0,
            'status' => 1,
            'gender' => $this->gender,
            'password' => Hash::make($this->password)
        ]);

        session()->flash('message', 'Your account has been created please login to continue.');
        return $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
