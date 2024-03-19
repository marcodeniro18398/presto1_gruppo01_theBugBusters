<div class="container-fluid img-bg-header py-5">
    <div class="container">
        @if (session('access.denied'))
            <div class="row justify-content-center pt-4">
                <div class="col-10">
                    <div class="alert alert-danger text-center">{{ session('access.denied') }}</div>
                </div>
            </div>
        @endif
    </div>
    <div class="row py-5">
        <div class="col-12 py-5">
            <h1 class="color-grey  font-title title ">Presto.it</h1>
        </div>
    </div>
    {{-- <div class="justify-content-center"> --}}
    <form action="{{ route('announcements.search') }}" class="row justify-content-center flex-column align-items-center" role="search" method="GET">
        <div class="col-8 col-md-3 justify-content-center py-3">
            <input class="form-control shadow-input" type="search" placeholder="{{__('ui.search')}}" aria-label="Search" name="searched">
        </div>
        <div class="col-12 col-md-1 d-flex justify-content-center">
            <button class="btn btn-outline-dark" type="submit">{{__('ui.research')}}</button>
        </div>
    </form>
    {{-- </div> --}}
</div>
