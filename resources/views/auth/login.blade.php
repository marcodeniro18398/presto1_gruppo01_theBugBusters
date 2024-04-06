<x-layout>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="container py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase margin-title">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">{{ __('ui.insertyourmail') }}</label>
                        <input type="email" class="form-control shadow-input @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="es.: mariorossi@email.com">

                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password" class="form-label">{{ __('ui.insertPass') }}</label>
                        <input type="password" class="form-control shadow-input @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="......">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="/forgot-password" class="color-grey mt-0 text-muted">
                        Hai dimenticato la password?
                    </a>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark mt-2">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
