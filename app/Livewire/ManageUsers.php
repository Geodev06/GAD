<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUsers extends Component
{

    use WithPagination;

    public $createForm = false;
    public $editForm = false;


    public $fullname = '';
    public $user_id = '';
    public $gender = 0;
    public $search = '';


    public $editUserId = '';
    public $editFullname = '';
    public $editStatus = '';
    public $editGender = '';


    public function save()
    {
        if ($this->createForm) {

            $this->validate(
                [
                    'fullname' => 'required|regex:/^[^\s][a-zA-Z\s.]+$/',
                    'user_id' => 'required|regex:/^[a-zA-Z0-9_-]+$/|unique:users'
                ]
            );

            User::create([
                'fullname' => $this->fullname,
                'user_id' => $this->user_id,
                'role' => 1,
                'status' => 1,
                'gender' => $this->gender,
                'password' => Hash::make('GAD-2023')
            ]);

            session()->flash('message', 'A user has been created.');
            $this->createForm =  false;
        }

        if ($this->editForm) {

            $this->validate(
                [
                    'editFullname' => 'required|regex:/^[^\s][a-zA-Z\s.]+$/',
                ]
            );

            User::where('id', $this->editUserId)->update([
                'fullname' => $this->editFullname,
                'gender' => $this->editGender
            ]);

            session()->flash('message', $this->editFullname . ' has been updated.');
            $this->editForm =  false;
        }
        $this->reset();
    }



    public function toggleCreateForm()
    {

        $this->createForm =  !$this->createForm;
        $this->editForm =  false;
    }

    public function closeEditForm()
    {
        $this->editForm =  !$this->editForm;
    }

    public function toggleStatus()
    {

        User::where('id', $this->editUserId)->update([
            'status' => $this->editStatus == 1 ? 0 : 1,
        ]);

        session()->flash('message', $this->editFullname . ' has been updated.');
    }
    public function toggleFormEdit($id)
    {
        $this->editForm = true;
        try {
            $user = User::find($id);
            $this->editUserId = $user->id;
            $this->editFullname = $user->fullname;
            $this->editStatus = $user->status;
            $this->editGender = $user->gender;
        } catch (\Throwable $th) {
            session()->flash('message-error', 'Something wen wrong please refresh the page.');
        }
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
            ->paginate(5);

        return view('livewire.manage-users', compact('users'));
    }
}
