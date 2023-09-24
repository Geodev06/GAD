<?php

namespace App\Livewire;

use App\Models\Section;
use App\Models\Studentsection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ManageStudents extends Component
{
    public bool $createForm = false;

    public string $fullname = '';
    public string $userId = '';
    public $gender = 0;
    public $sectionId = '';

    public $level = '';
    public $sections = null;

    public function toggleCreateForm()
    {
        $this->createForm = !$this->createForm;
    }

    protected $rules = [
        'fullname' => 'required|regex:/^[^\s][a-zA-Z\s.]+$/',
        'userId' => 'required|regex:/^[a-zA-Z0-9_-]+$/',
        'level' => 'required',
        'sectionId' => 'required'
    ];

    public function save()
    {
        if ($this->createForm) {
            $this->validate();

            User::create([
                'fullname' => $this->fullname,
                'user_id' => $this->userId,
                'gender' => $this->gender,
                'role' => 2,
                'status' => 1,
                'password' => Hash::make('GAD-2023'),
                'created_by' => Auth::user()->id    
            ]);

            Studentsection::create(['user_id' => $this->userId, 'section_id' => $this->sectionId]);

            session()->flash('message', 'Student has been created!');

            $this->toggleCreateForm();
        }
    }
    public function updated()
    {
        $sections = Section::where('level', $this->level)->get();

        $this->sections = $sections;
    }
    public function render()
    {
        return view('livewire.manage-students');
    }
}
