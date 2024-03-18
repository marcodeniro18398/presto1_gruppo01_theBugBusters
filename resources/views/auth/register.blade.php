<x-layout>
    @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="container margin-title">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase">{{__('ui.registration')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="py-2 mb-3">
                        <label for="name" class="form-label">{{__('ui.insertyourname')}}</label>
                        <input type="text" class="form-control shadow-input" id="name" name="name"
                            placeholder="es.: Mario Rossi">
                    </div>
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">{{__('ui.insertyourmail')}}</label>
                        <input type="email" class="form-control shadow-input" id="email" name="email"
                            placeholder="es.: mariorossi@email.com">
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
                        <button type="submit" class="btn btn-outline-dark mt-2">{{__('ui.registration')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
