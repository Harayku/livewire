<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\player;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class PlayerForm extends Component
{

/*     public PlayerCreate $playersForm;

    public function save()
    {
        $this->playersForm->store();
    } */

    use WithPagination;
    #[On('refreshTable')]
    public function render()
    {
        return view('livewire.player-form',
        [
            'players' => player::paginate(15),
        ]
    );
    }
}
