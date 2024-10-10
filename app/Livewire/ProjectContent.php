<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectContent extends Component
{
    public int $ID;
    public array $projects = [
        1 => "Obecność",
        2 => "Snake",
        3 => "Zgadnij Suchara",
        4 => "Open4u",
        5 => "DigiFreelancer",
        6 => "Gary5.0",
        7 => "Discord killbot",
        8 => "ProsperBSR",
        9 => "BrandApp",
        10 => "Edu4Food",
        11 => "M4I",
    ];

    public function mount($id)
    {
        $this->ID = $id;
    }

    public function render()
    {
        return view('livewire.project-content');
    }

    public function download($file)
    {
        if (!file_exists(public_path('files/'.$file))) {
            abort(404, 'File not found.');
        }
        return response()->download(public_path('files/'.$file));
    }



}
