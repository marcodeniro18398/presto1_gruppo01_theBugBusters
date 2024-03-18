<x-layout>
    <div class="container py-4 margin-title">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase font-primary">{{__('ui.announcement')}} {{ $announcement->name }}</h2>
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
                    @if ($announcement->images)
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    @else
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
                    @endif


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
                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                    class="btn btn-primary  my-2">{{__('ui.category')}} {{ __('ui.'.$announcement->category->name) }}</a>
                <p class="fst-italic">{{__('ui.publication')}} {{ $announcement->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>
</x-layout>
