<x-layout>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="container py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase">Effettua il login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">Inserisci la tua email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="es.: mariorossi@email.com">

                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password" class="form-label">Inserisci la tua password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="......">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-light mt-2">Accedi!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
