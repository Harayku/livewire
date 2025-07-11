<div class="w-md">
    <x-mary-card title="{{$player->name}}">
        {{ $player->position }}
        <x-slot:figure>
            <img src="{{ $player->imageUrl() }}" />
        </x-slot:figure>
        <x-slot:menu>
            <x-mary-button label="Edit" class="btn-success" />
            <x-mary-button icon="o-trash" class="btn-outline btn-secondary" wire:confirm="Are you sure you want to delete this player?"
                 wire:click="deletePlayer"/>
        </x-slot:menu>

    </x-mary-card>
</div>