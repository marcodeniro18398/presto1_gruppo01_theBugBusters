<x-layout>
    <div class="container py-4">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase">Annuncio {{ $announcement->name }}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/700/200" class="img-fluid w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/700/200" class="img-fluid w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/700/200" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="col-12 col-md-3 my-3">
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 card-body d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">{{ $announcement->name }}</h5>
                <p class="card-text">{{ $announcement->description }}</p>
                <p class="card-text">{{ $announcement->price }}</p>
                <a href="" class="btn btn-primary  my-2">Categoria: {{ $announcement->category->name }}</a>
                <p class="fst-italic">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>
</x-layout>
