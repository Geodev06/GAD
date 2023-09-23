<?php

namespace App\Livewire;

use Livewire\Component;

class ManageStudents extends Component
{
    public bool $createForm = false;

    public function showCreateForm()
    {
        $this->createForm = true;
    }
    public function render()
    {
        return view('livewire.manage-students');
    }
}
