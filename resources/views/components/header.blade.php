<div class="container-fluid img-bg-header py-5">
    <div class="row py-5">
        <div class="col-12 py-5">
            <h1 class="color-grey pt-5 text-uppercase font-primary display-5 fw-bold">Presto.it</h1>
        </div>
    </div>
    {{-- <div class="justify-content-center"> --}}
    <form action="{{ route('announcements.search') }}" class="row justify-content-center flex-column align-items-center" role="search" method="GET">
        <div class="col-12 col-md-3 justify-content-center py-2">
            <input class="form-control" type="search" placeholder="Cosa vuoi cercare?" aria-label="Search" name="searched">
        </div>
        <div class="col-12 col-md-1 d-flex justify-content-center">
            <button class="btn btn-outline-dark" type="submit">Ricerca</button>
        </div>
    </form>
    {{-- </div> --}}
</div>
