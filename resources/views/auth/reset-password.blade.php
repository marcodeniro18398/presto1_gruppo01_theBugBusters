<x-layout>
    <div class="container py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase margin-title">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <form action="/reset-password" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">{{ __('ui.insertyourmail') }}</label>
                        <input type="email" value="{{ $request->email }}"
                            class="form-control shadow-input @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="es.: mariorossi@email.com">

                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password" class="form-label">{{__('ui.insertPass')}}</label>
                        <input type="password" class="form-control shadow-input" id="password" name="password" placeholder="......">
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password_confirmation" class="form-label">{{__('ui.confirmedPass')}}</label>
                        <input type="password" class="form-control shadow-input" id="password_confirmation"
                            name="password_confirmation" placeholder="......">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark mt-2">Modifica</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
