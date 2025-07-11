<div>
    <x-mary-modal wire:model="addPlayer" title="Add a Player" subtitle="Input a new player">
        <x-mary-form wire:submit.prevent="store" no-separator>
            @csrf
            <x-mary-input label="Name" icon="o-user" placeholder="Player name" wire:model="name" />
            <x-mary-input label="Position" icon="o-star" placeholder="position(eg. warrior, mage)" wire:model="position" max-size="2048"/>
            <x-mary-file label="Image" accept="png/jpeg/jpg/webp" wire:model="image"/>

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeModal" />
                <x-mary-button label="Confirm" class="btn-primary" type="submit"/>
            </x-slot:actions>
        </x-mary-form>
    </x-mary-modal>
    <x-mary-button label="ADD" wire:click="openModal" />
</div>
