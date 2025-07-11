<?php

namespace App\Livewire;

use App\Models\player;
use Livewire\Component;

class PlayerDetail extends Component
{
    
    public player $player;

    public function mount(Player $player)
    {
        $this->player = $player;
    }

    public function updatePlayer()
    {
        $this->validate([
            'player.name' => 'required|string|max:255',
            'player.age' => 'required|integer|min:0',
            'player.position' => 'required|string|max:50',
        ]);

        $this->player->save();
        return redirect()->route('main');
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
