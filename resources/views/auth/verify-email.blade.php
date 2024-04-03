<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 justify-content-center align-items-center">
                <h2 class= "margin-title subtitle">Grazie per esserti iscritto</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 d-flex justify-content-center align-items-center flex-column mt-4 p-3">
                <p>Per iniziare verifica la tua email cliccando sul link che ti abbiamo inviato al tuo indirizzo email.
                </p>
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success my-4">
                        Ti abbiamo inviato un'email
                    </div>
                @endif
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-custom1">Invia una nuova email di verifica</button>
                </form>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <p>Stai riscontrando dei problemi?</p>
                    <button type="submit" class="btn btn-custom1">Logout</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
