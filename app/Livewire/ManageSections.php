<?php

namespace App\Livewire;

use App\Models\Section;
use Livewire\Component;

class ManageSections extends Component
{
    public bool $createForm = false;

    public $search;

    public $years = [];

    public string $sectionId;
    public string $sectionName;
    public $level;
    public $schoolYear;

    protected $rules = [
        'sectionName' => 'required|regex:/^[^\s][a-zA-Z\s.0-9]+$/',
        'level' => 'required',
        'schoolYear' => 'required',

    ];

    public function mount()
    {

        $n = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $this->sectionId = $randomString;

        for ($i = 1900; $i < 2050; $i++) {
            $this->years[] = $i . '-' . ($i + 1);
        }
    }


    public function save()
    {
        $this->validate();

        Section::create([
            'section_id' => $this->sectionId,
            'section_name' => $this->sectionName,
            'level' => $this->level,
            'school_year' => $this->schoolYear,
            'status' => 1,
        ]);

        session()->flash('message', 'Section has been successfully created!');

        $this->createForm = false;
        $this->reset();
    }

    public function toggleCreateForm()
    {
        $this->createForm = !$this->createForm;
    }

    public function render()
    {
        $sections = Section::where('section_name', 'like', '%' . $this->search . '%')
            ->where('status', 1)
            ->paginate(5);
        return view('livewire.manage-sections', compact('sections'));
    }
}
