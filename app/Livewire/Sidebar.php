<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function signout()
    {
        Auth::logout();
        return $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.sidebar');
    }
}
