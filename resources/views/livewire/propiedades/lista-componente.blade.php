<div>
    <section>
        <form wire:submit="agregarLista">
            <input type="text" name="lista" id="lista" wire:model.change="lista">
            <button type="submit">agregar a la lista</button>
            <p>escribiendo: {{ $lista }}</p>
        </form>
    </section>

    <ul>
        @forelse ($listas as $lista)
            <li>
                {{ $lista }}
            </li>
        @empty
            <p>la lista esta vacia</p>
        @endforelse
    </ul>
</div>
