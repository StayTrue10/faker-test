<div>
    <p class="text-secondary fs-5">Ingresa una cadena:</p>
    <div class="form-floating mb-3">
        <input wire:model="cadena" type="text" class="form-control" id="cadena" placeholder="Cadena">
        <label for="cadena">Cadena</label>
    </div>
    <p class="text-secondary fs-5">Convertir a:</p>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="metodo" name="metodo" id="radio1" value="1">
            <label class="form-check-label" for="radio1">Letras</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="metodo" name="metodo" id="radio2" value="2">
            <label class="form-check-label" for="radio2">Números</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="metodo" name="metodo" id="radio3" value="3">
            <label class="form-check-label" for="radio3">Ambos</label>
        </div>
    </div>
    <div class="d-grid">
        <button wire:click.prevent="convertir()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Convertir</button>
    </div>
    <p class="text-secondary my-3 fs-5">Respuesta: </p>
    @if($res != null)
        <p class="text-info mt-3">{{ $res }}</p>
    @elseif($msj != null)
        <p class="text-danger mt-3">{{ $msj }}</p>
    @endif
</div>