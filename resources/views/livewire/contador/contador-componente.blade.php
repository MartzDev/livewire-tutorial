<div>
    contador: {{ $contador }}

    <button type="button" wire:click="incrementarContador"
        wire:confirm="¿Seguro(a) que quiere incrementar el contador?">incrementar contador</button>
</div>
