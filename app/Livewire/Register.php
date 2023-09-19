<?php

namespace App\Livewire;

use App\Http\Requests\AdminStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    public  $fullname;
    public  $user_id;
    public  $password;
    public  $password_confirmation;

    public  $gender = "0";
    public  $terms = null;

    public $adminCount = 0;

    protected $rules = [
        'fullname' => ['required', 'regex:/^[A-Za-z\s.]+$/'],
        'user_id' => ['required', 'unique:users', 'regex:/^[A-Za-z0-9@#_]+$/'],
        'password' => ['required', 'min:8', 'confirmed']
    ];

    public function mount()
    {
        $this->adminCount = User::where('role', 0)->count();
    }

    public function handleSubmit()
    {
        $this->validate();

        User::create([
            'fullname' => $this->fullname,
            'user_id' => $this->user_id,
            'gender' => $this->gender,
            'role' => '0',
            'status' => '1',
            'password' => Hash::make($this->password)
        ]);

        session()->flash('success', 'Your account has been created. please login to continue');

        return $this->redirect('/', navigate: true);
    }

    #[Title('Register')]
    public function render()
    {
        return view('livewire.register');
    }
}
