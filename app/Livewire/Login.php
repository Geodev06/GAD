<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $user_id = '';
    public $password = '';

    public $userType;

    public function authenticate()
    {

        if ($this->userType == 0) {
            if (Auth::attempt(['user_id' => $this->user_id, 'password' => $this->password, 'status' => 1])) {

                return $this->redirect('/dashboard', navigate: true);
            }
        }

        if ($this->userType == 1) {
            if (Auth::attempt(['user_id' => $this->user_id, 'password' => 'GAD-2023', 'status' => 1])) {

                return $this->redirect('/dashboard', navigate: true);
            }
        }


        session()->flash('error', 'Login failed! you have entered wrong credentials!.');
    }
    #[Title('Login')]
    public function render()
    {

        return view('livewire.login');
    }
}
