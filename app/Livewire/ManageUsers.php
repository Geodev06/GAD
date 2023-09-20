<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Lazy;
use Livewire\Component;

class ManageUsers extends Component
{
    public $createForm = false;

    public $fullname;
    public $user_id;
    public $gender = 0;
    public $search = '';

    protected $rules = [
        'fullname' => 'required|regex:/^[a-zA-Z\s.]+$/',
        'user_id' => 'required|regex:/^[a-zA-Z0-9_-]+$/|unique:users',
    ];

    public function save()
    {
        $this->validate();

        User::create([
            'fullname' => $this->fullname,
            'user_id' => $this->user_id,
            'role' => 1,
            'status' => 1,
            'gender' => $this->gender,
            'password' => Hash::make('GAD-2023')
        ]);

        session()->flash('message', 'A user has been created.');
        $this->createForm =  !$this->createForm;
    }
    public function toggleForm()
    {

        $this->createForm =  !$this->createForm;
    }

    public function placeholder()
    {
        return view('partials.placeholder');
    }

    #[Lazy]
    public function render()
    {
        $users = User::where('role', '!=', 0)
            ->where('fullname', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->take(6)->get();

        return view('livewire.manage-users', compact('users'));
    }
}
