<x-layout>
    <div class="container-fluid py-4 margin-title">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase font-primary">{{ __('ui.announcement') }} {{ $announcement->name }}</h2>
            </div>
        </div>
        <div class="row justify-content-center w-100">
            <div class="col-10 col-md-6 justify-content-center d-flex">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    @if ($announcement->images)
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)

                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(400, 300) }}"
                                        class="img-fluid p-3 rounded" alt="">
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

                </div>
            </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span><i class="bi bi-caret-left-fill color-grey arrow-size"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span><i class="bi bi-caret-right-fill color-grey arrow-size"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
        </div>
    </div>
    </div>

    {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade">
    @if ($announcement->images)
    <div class="carousel-inner">
        @foreach ($announcement->images as $image)
        <div class="carousel-item active">
            <img src="{{ $announcement->images()->first()->getUrl(400, 300) }}" class="d-block w-100" alt="...">
        </div>
        @endforeach
    </div>
    @endif
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
    data-bs-slide="prev">
    <span><i class="bi bi-caret-left-fill color-grey arrow-size"></i><</span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
data-bs-slide="next">
<span><i class="bi bi-caret-right-fill color-grey arrow-size"></i></span>
<span class="visually-hidden">Next</span>
</button>
</div> --}}

    <div class="row">
        <div class="col-12 col-md-8 card-body w-100 d-flex justify-content-center align-items-center flex-column">
            <h5 class="card-title">{{ $announcement->name }}</h5>
            <p class="w-100 px-5 mx-5">{{ $announcement->description }}</p>
            <p class="w-100 px-5 mx-5">{{ $announcement->price }} €</p>
            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                class="my-2 btn btn-custom1">{{ __('ui.category') }}
                {{ __('ui.' . $announcement->category->name) }}</a>
            <p class="fst-italic">{{__('ui.publication')}} {{ $announcement->created_at->format('d/m/Y') }} {{__('ui.from')}} {{ $announcement->user->name ?? '' }}</p>
        </div>
    </div>
    </div>
</x-layout>
