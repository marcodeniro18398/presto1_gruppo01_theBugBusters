<x-layout>
    @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="container py-4">
        <div class="row pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase margin-title subtitle">{{__('ui.workwithus')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('revisor.become') }}" method="POST">
                    @csrf
                    <div class="py-2 mb-3">
                        <label for="name" class="form-label">{{__('ui.insertyourname')}}</label>
                        <input type="name" class="form-control shadow-input @error('name') is-invalid @enderror"
                        id="text" name="name" placeholder={{__('ui.insertyourname')}}>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="email" class="form-label">{{__('ui.insertyourmail')}}</label>
                        <input type="email" class="form-control shadow-input @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="es.: rossimario@email.com">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="py-2 mb-3">
                        <label for="message" class="form-label">{{__('ui.insertyourmessage')}}</label>
                        <textarea wire:model.live.blur="message" id="message" class="form-control shadow-input" cols="30" rows="10">
                        </textarea>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-custom1 mt-2">{{__('ui.send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
