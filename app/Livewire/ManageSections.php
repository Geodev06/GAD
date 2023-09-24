<?php

namespace App\Livewire;

use App\Models\Section;
use Livewire\Component;
use Livewire\WithPagination;

class ManageSections extends Component
{
    use WithPagination;

    public bool $createForm = false;
    public bool $editForm = false;


    public $search;

    public $years = [];

    public string $sectionId;
    public string $sectionName;
    public $level;
    public $schoolYear;


    public string $editsectionId;

    protected $rules = [
        'sectionName' => 'required|regex:/^[^\s][a-zA-Z\s.0-9]+$/',
        'level' => 'required',
        'schoolYear' => 'required'
    ];

    public function mount()
    {

        for ($i = 1900; $i < 2050; $i++) {
            $this->years[] = $i . '-' . ($i + 1);
        }
    }

    public function hydrate()
    {

        $n = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $this->sectionId = $randomString;
    }

    public function resetFields()
    {
        $this->editsectionId = '';
        $this->sectionId = '';
        $this->sectionName = '';
        $this->level = '';
        $this->schoolYear = '';
    }

    public function save()
    {
        if ($this->createForm) {

            $this->validate();

            Section::create([
                'section_id' => $this->sectionId,
                'section_name' => $this->sectionName,
                'level' => $this->level,
                'school_year' => $this->schoolYear,
                'status' => 1,
            ]);

            session()->flash('message', 'Section has been successfully created!');
            $this->resetFields();
            $this->createForm = false;
        }


        if ($this->editForm) {

            $this->validate();

            Section::where('section_id', $this->editsectionId)->update([
                'section_name' => $this->sectionName,
                'level' => $this->level,
                'school_year' => $this->schoolYear
            ]);

            session()->flash('message', 'Section has been successfully updated!');
            $this->resetFields();

            $this->editForm = false;
        }
    }

    public function toggleCreateForm()
    {
        $this->createForm = !$this->createForm;
        $this->editForm = false;
    }


    public function toggleEditForm($id)
    {
        $this->editForm = !$this->editForm;

        $section = Section::find($id);

        $this->editsectionId = $section->section_id;

        $this->sectionId = $section->section_id;
        $this->sectionName = $section->section_name;
        $this->level = $section->level;
        $this->schoolYear = $section->school_year;
        $this->createForm = false;
    }

    function closeEditForm()
    {
        $this->editForm = false;
    }

    public function toggleArchive($id, $currStatus)
    {
        Section::where('id', $id)->update(
            ['status' => $currStatus == '0' ? 1 : 0]
        );
    }


    public function render()
    {

        $sections = Section::where('section_name', 'like', '%' . $this->search . '%')

            ->paginate(6);

        return view('livewire.manage-sections', compact('sections'));
    }
}
