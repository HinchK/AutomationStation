<?php

namespace App\Http\Livewire;

use App\Application;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationForm extends Component
{
    use WithFileUploads;

    public $name;
    public $github;
    public $region;
    public $backup_filename;
    public $notes;

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'github' => 'required',
        ]);

        $uploadName = $this->backup_filename->store('backups', 'public');

        Application::create([
            'name' => $this->name,
            'github' => $this->github,
            'backup_filename' => $uploadName,
        ]);

        session()->flash('message', 'Application Added to Database');

        return redirect()->to('/login');
    }


    public function render()
    {
        return view('livewire.application-form');
    }
}
