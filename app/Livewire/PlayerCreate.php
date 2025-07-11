<?php

namespace App\Livewire;

use App\Models\position;
use App\Models\player;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class PlayerCreate extends Component
{
    use WithFileUploads;

    public bool $addPlayer = false;

    #[Validate('string', 'required', 'max:255')]
    public $name;

    #[Validate('string', 'required', 'max:255')]
    public $position;

    #[Validate('image', 'required', 'max:25024')] 
    public $image;

    public function store()
    {
        $this->validate();
        $imagePath = $this->image ? $this->image->store('images', 'public') : null;

        $createPlayer = player::create([
            'name' => $this->name,
            'position' => $this->position,
            'image' => $imagePath,
        ]);

        position::create([
            'postion_name' => $this->position,
            'player_id' => $createPlayer->id,
        ]);

        $this->dispatch('refreshTable');
        $this->closeModal();
        $this->reset();
        $this->resetValidation();
    }

    public function openModal()
    {
        $this->addPlayer = true;
    }

    public function closeModal()
    {
        $this->addPlayer = false;
    }
    public function render()
    {
        return view('livewire.player-create');
    }
}
