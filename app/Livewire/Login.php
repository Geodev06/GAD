<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $adminCount;
    public $userType;

    public $user_id;
    public $password;
    public $remember;


    protected $rules = [
        'user_id' => 'required'
    ];

    public function mount()
    {
        $this->adminCount = User::where('role', 0)->count();
        if ($this->adminCount <= 0) {
            return $this->redirect('/register', navigate: true);
        }
    }

    public function authenticate()
    {
        $this->validate();

        if ($this->userType == '0') {
            if (Auth::attempt(['user_id' => $this->user_id, 'password' => $this->password, 'status' => 1], $this->remember)) {
                return $this->redirect('/dashboard', navigate: true);
            }
        }

        if ($this->userType == '1') {
            if (Auth::attempt(['user_id' => $this->user_id, 'password' => 'GAD-2023', 'status' => 1], $this->remember)) {
                return $this->redirect('/dashboard', navigate: true);
            }
        }
        session()->flash('message-error', 'Login failed you have entered wrong credentials.');
    }

    public function placeholder()
    {
        return view('partials.placeholder');
    }

    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }
}
