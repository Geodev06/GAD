<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUsers extends Component
{
    use WithPagination;

    public $search = '';

    public $createForm = false;

    public function toggleForm()
    {
        $this->createForm = !$this->createForm;
    }

    public function deactivate($user_id)
    {
        $user = User::where('user_id', $user_id)->first();
        if ($user->status == 0) {
            $user->update(['status' => 1]);
        } else {
            $user->update(['status' => 0]);
        }
    }

    #[Title('Manage Users')]
    public function render()
    {
        $users = User::where('role', '!=', 0)
            ->where('fullname', 'like', '%' . $this->search . '%')

            ->orderBy('created_at', 'desc')
            ->simplePaginate(5);
        return view('livewire.manage-users', compact('users'));
    }
}
