<x-layout>
    <x-header />
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h5 class="py-5 subtitle text-uppercase font-primary">{{ __('ui.latestAnnoucement') }}</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4 my-5 d-flex justify-content-around">
                    {{-- <div class="card rounded-5" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(200, 150) : 'https://picsum.photos/200' }}"
                            class="rounded-top-5" alt="...">
                        <div class="card-body rounded-bottom-5 bg-grey color-champagnePink">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn mx-1 my-1 btn-custom2">dettagli!</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn mx-1 my-1 btn-custom2">Categoria:{{ $announcement->category->name }}</a>
                            <p class="card-text pt-3 fst-italic">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div> --}}
                    <x-card :announcement="$announcement"></x-card>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
