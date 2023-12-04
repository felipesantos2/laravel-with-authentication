<div>
    <form wire:submit="saveNewAnime" method="post">
        @csrf
        <input type="text" name="anime" id="anime" wire:model="name">
        <input type="number" name="episodes" id="episodes" wire:model="episodes">
        <button type="submit">Enviar</button>
    </form>
</div>
