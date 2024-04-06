<x-layout>
    <div class="container-fluid py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase margin-title">Password dimenticata</h2>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-4 justify-content-center vh-100">
        <div class="col-12 col-md-6">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form action="/forgot-password" method="POST">
                @csrf
                <div class="py-2 mb-3">
                    <label for="email" class="form-label">{{ __('ui.insertyourmail') }}</label>
                    <input type="email" class="form-control shadow-input @error('email') is-invalid @enderror"
                        id="email" name="email" placeholder="es.: mariorossi@email.com">

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark mt-2">Invia</button>
                    </div>
            </form>
        </div>
    </div>
</x-layout>
