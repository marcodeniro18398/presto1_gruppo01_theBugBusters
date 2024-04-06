<x-layout>


    <div class="container margin-title ">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6 ">
                <div class="text-center">
                    <h4 class="title-font fw-bold">Profilo di: {{ Auth::user()->name }}</h4>
                </div>
                <ul class="list-unstyled d-flex align-items-center justify-content-evenly py-3">
                    <li class="title-font color-champagnePink">
                        <p class="">Email : {{ Auth::user()->email }}</p>
                    </li>
                    <li class="title-font color-champagnePink">
                        <p>Account verificato : <i
                                class="{{ Auth::user()->email_verified_at ? 'bi bi-check-circle-fill text-success' : 'bi bi-check-circle-fill text-danger' }}"></i>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

            @if (session('status') == 'profile-information-updated')
        <div class="alert alert-success">
            <p>
                Hai modificato il tuo profilo correttamente
            </p>
        </div>
    @endif

    @if (session('status') == 'password-updated')
        <div class="alert alert-success">
            <p>
                Hai modifcato la passowrd correttamente
            </p>
        </div>
    @endif

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="/user/profile-information" method="POST">
                    @csrf
                    @method('put')
                    <div class="py-2 mb-3">
                        <label for="name" class="form-label">{{ __('ui.insertyourname') }}</label>
                        <input type="text" class="form-control shadow-input" id="name" name="name"
                            placeholder="es.: Mario Rossi">
                    </div>
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">{{ __('ui.insertyourmail') }}</label>
                        <input type="email" class="form-control shadow-input" id="email" name="email"
                            placeholder="es.: mariorossi@email.com">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark mt-2">{{ __('ui.modify') }}</button>
                    </div>
                </form>
                <form action="/user/password" method="POST">
                    @csrf
                    @method('put')
                    <div class="py-2 mb-3">
                        <label for="password" class="form-label">{{ __('ui.insertPass') }}</label>
                        <input type="password" class="form-control shadow-input" id="current_password"
                            name="current_password" placeholder="......">
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password" class="form-label">{{ __('ui.insertPass') }}</label>
                        <input type="password" class="form-control shadow-input" id="password" name="password"
                            placeholder="......">
                    </div>
                    <div class="py-2 mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('ui.confirmedPass') }}</label>
                        <input type="password" class="form-control shadow-input" id="password_confirmation"
                            name="password_confirmation" placeholder="......">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark mt-2">{{ __('ui.registration') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
