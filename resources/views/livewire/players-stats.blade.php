<div class="w-md">
    <x-mary-stat
        title="Total Players"
        description="Player Count"
        value="{{ $totalplayers }}"
        icon="o-user"
        tooltip-right="total niggas"
        class="mb-4" />

    <x-mary-stat
        title="Warrior"
        description="Player Count"
        value="{{ $warriorPlayers }}"
        icon="o-user"
        tooltip-right="warrior niggas"
        class="mb-4"
        color="text-red-400" />

    <x-mary-stat
        title="Mage"
        description="Player Count"
        value="{{ $magePlayers }}"
        icon="o-user"
        tooltip-right="mage niggas"
        class="mb-4"
        color="text-blue-400" />

    <x-mary-stat
        title="Tank"
        description="Player Count"
        value="{{ $tankPlayers }}"
        icon="o-user"
        tooltip-right="tank niggas"
        class="mb-4"
        color="text-green-400" />

    <x-mary-stat
        title="Assassin"
        description="Player Count"
        value="{{ $assassinPlayers }}"
        icon="o-user"
        tooltip-right="assassin niggas"
        class="mb-4"
        color="text-pink-500" />
</div>