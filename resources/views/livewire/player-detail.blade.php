<div class="w-md">

    <x-mary-card title="{{$player->name}}">
        {{ $player->position }}
        <x-slot:figure>
            <img src="{{ asset('storage/' . $player->image) }}" />
        </x-slot:figure>
        <x-slot:menu>
            <x-mary-button label="Edit" class="btn-success" 
                wire:click="openEditModal" />
            <x-mary-button icon="o-trash" class="btn-outline btn-secondary" wire:confirm="Are you sure you want to delete this player?"
                wire:click="deletePlayer" />
        </x-slot:menu>

    </x-mary-card>

    <x-mary-modal wire:model="editPlayer" title="Edit Player" subtitle="Edit a player">
        <x-mary-form wire:submit="updatePlayer" no-separator>
            <x-mary-input label="Name" icon="o-user" placeholder="Player name" wire:model="newName" />
            <x-mary-input label="Position" icon="o-star" placeholder="position(eg. warrior, mage)" wire:model="newPosition" max-size="2048" />
            <x-mary-file label="Image" accept="png/jpeg/jpg/webp" wire:model="newImage" />

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeEditModal" />
                <x-mary-button label="Confirm" class="btn-primary" type="submit" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>
</div>