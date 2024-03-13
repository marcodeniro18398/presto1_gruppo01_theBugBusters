<div class="container-fluid img-bg-header py-5">
    <div class="row py-5">
        <div class="col-12 py-5">
            <h1 class="color-grey pt-5 text-uppercase font-primary display-5 fw-bold">Presto.it</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('announcements.search') }}" class="d-flex" role="search" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searched">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
