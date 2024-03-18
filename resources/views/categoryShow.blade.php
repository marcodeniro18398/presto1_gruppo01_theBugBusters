<x-layout>
    <div class="container-fluid margin-title">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h2 class="text-uppercase font-primary pt-4 pb-5">Tutte le categorie!</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-3 my-3">
                    <div class="card rounded-5" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                            class="rounded-top-5" alt="...">
                        <div class="card-body rounded-bottom-5 bg-grey color-champagnePink">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn btn-custom2">dettagli!</a>
                            <p href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-custom2 mb-0">Categoria:{{ $announcement->category->name }}</p>
                            <p class="card-text pt-3 fst-italic">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} da:
                                {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 col-md-8 vh-50 pt-5">
                    <p class="pt-5">Non sono presenti annunci per questa categoria!</p>
                    <p>Pubblicane uno: <a class="mx-2 btn btn-custom" href="{{ route('announcements.create') }}">Nuovo annuncio</a></p>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
