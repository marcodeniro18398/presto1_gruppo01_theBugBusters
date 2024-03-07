<div>
    <form wire:submit.prevent="store">
        @csrf
        {{-- <div class="py-2 mb-3">
            <label for="name" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="es.: Mario Rossi">
        </div> --}}
        <div class="py-2 mb-3">
            <label for="name" class="form-label">Nome oggetto:</label>
            <input type="text" class="form-control" id="name" wire:model="$name" placeholder="es. Mario Rossi">
        </div>
        <div class="py-2 mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea wire:model="$description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="py-2 mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="number" class="form-control" id="price" wire:model="$price" >
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-light mt-2">Inserisci</button>
        </div>
    </form>
</div>
