<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{


    public function logout()
    {
        Auth::logout();

        return $this->redirect('/', navigate: true);
    }


    #[Title('Dashboard')]

    public function render()
    {
        return view('livewire.dashboard');
    }
}
