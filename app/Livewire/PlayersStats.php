<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\player;

class PlayersStats extends Component
{
    public $totalplayers;
    public $warriorPlayers;
    public $magePlayers;
    public $tankPlayers;
    public $assassinPlayers;

    public function mount()
    {
        $this->totalplayers = player::count();
        $this->warriorPlayers = player::where('position', 'LIKE', 'warrior')->count();
        $this->magePlayers = player::where('position', 'LIKE', 'mage')->count();
        $this->tankPlayers = player::where('position', 'LIKE', 'tank')->count();
        $this->assassinPlayers = player::where('position', 'LIKE', 'assassin')->count();
    }

    public function render()
    {
        return view('livewire.players-stats');
    }
}
