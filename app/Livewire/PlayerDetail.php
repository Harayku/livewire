<?php

namespace App\Livewire;

use App\Models\player;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class PlayerDetail extends Component
{
    use WithFileUploads;

    public player $player;

    public bool $editPlayer = false;

    #[Validate('string', 'required', 'max:255')]
    public $newName = '';

    #[Validate('string', 'required', 'max:255')]
    public $newPosition = '';

    #[Validate('nullable')]
    public $newImage  = null;

    public function openEditModal()
    {
        $this->newName = $this->player->name;
        $this->newPosition = $this->player->position;      
        $this->editPlayer = true;
    }

    public function updatePlayer()
    {
        $this->validate();
        $imagePath = $this->newImage ? $this->newImage->store('images', 'public') : $this->player->image;

        $this->player->update([
            'name' => $this->newName,
            'position' => $this->newPosition,
            'image' => $imagePath,
        ]);

        $this->reset(['newName', 'newPosition', 'newImage']);
        $this->closeEditModal();
        
    }

    public function closeEditModal()
    {
        $this->editPlayer = false;
    }

    public function mount(Player $player)
    {
        $this->player = $player;
    }

    public function deletePlayer()
    {
        $this->player->delete();
        return redirect()->route('main');
    }

    public function render()
    {
        return view('livewire.player-detail');
    }
}
