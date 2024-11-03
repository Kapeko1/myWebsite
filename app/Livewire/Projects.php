<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public $projects = [];
    public $selectedTech = 'all';

    public function mount()
    {
        $this->projects = [
            [
                'id' => 1,
                'title' => 'Obecność',
                'tech' => 'Unity',
                'description' => 'Event Planner and Attendance Log.',
                'image' => '1.png',
                'cowork' => false,
            ],
            [
                'id' => 2,
                'title' => 'Snake',
                'tech' => 'Java',
                'description' => 'A snake game where an enemy appears after reaching a certain number of points.',
                'image' => '2.png',
                'cowork' => false,
            ],
            [
                'id' => 3,
                'title' => 'Zgadnij Suchara',
                'tech' => 'Unity',
                'description' => 'A mobile game created during my internship at Simplicity Games.',
                'image' => '3.png',
                'cowork' => true,
            ],
            [
                'id' => 4,
                'title' => 'Open4u',
                'tech' => 'Flutter',
                'description' => 'A mobile application designed to teach new approaches to working with employees.',
                'image' => '4.png',
                'cowork' => false,
            ],
            [
                'id' => 5,
                'title' => 'DigiFreelancer',
                'tech' => 'Laravel',
                'description' => 'An educational platform about business',
                'image' => '9.png',
                'cowork' => true,
            ],
            [
                'id' => 6,
                'title' => 'Gary5.0',
                'tech' => 'Laravel',
                'description' => 'An educational platform about entrepreneurship.',
                'image' => '10.png',
                'cowork' => false,
            ],
            [
                'id' => 7,
                'title' => 'Discord killbot',
                'tech' => 'Python',
                'description' => 'An automated application that monitors an API for changes.',
                'image' => '11.png',
                'cowork' => false,
            ],
            [
                'id' => 8,
                'title' => 'ProsperBSR',
                'tech' => 'Flutter',
                'description' => 'Prosper is an app designed to support refugees in searching for job.',
                'image' => '5.png',
                'cowork' => true,
            ],
            [
                'id' => 9,
                'title' => 'BrandApp',
                'tech' => 'Flutter',
                'description' => 'An educational application about sustainable fashion.',
                'image' => '6.png',
                'cowork' => true,
            ],
            [
                'id' => 10,
                'title' => 'Edu4Food',
                'tech' => 'Laravel',
                'description' => 'An educational platform about sustainable food.',
                'image' => '7.png',
                'cowork' => false,
            ],
            [
                'id' => 11,
                'title' => 'M4I',
                'tech' => 'Laravel',
                'description' => 'An educational platform about mental health for refugees.',
                'image' => '8.png',
                'cowork' => false,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.projects');
    }
}
