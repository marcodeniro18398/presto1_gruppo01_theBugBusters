<x-layout>
    @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    
    <div class="container py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase margin-title">Lavora con noi</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('revisor.become') }}" method="POST">
                    @csrf
                    <div class="py-2 mb-3">
                        <label for="name" class="form-label">Inserisci la tua nome:</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                        id="text" name="name" placeholder="Inserisci il tuo nome e cognome">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">Inserisci la tua email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="es.: rossimario@email.com">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="message" class="form-label">Inserisci il tuo messaggio:</label>
                        <textarea wire:model.live.blur="message" id="message" class="form-control" cols="30" rows="10">
                        </textarea>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-light mt-2">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
