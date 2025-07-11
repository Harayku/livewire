<div>
    @foreach($players as $player)
    <a href="{{ route('showPlayer', $player->id, $player->name) }}" class="block">
        <x-mary-list-item :item="$player" sub-value="position" />
    </a>
    @endforeach
    {{ $players->links() }}
</div>