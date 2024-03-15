<x-layout>
    <x-header />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                @if (session('access.denied'))
                    <div class="alert alert-danger text-center">{{ session('access.denied') }}</div>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h5 class="py-5 text-uppercase font-primary">Tutti gli annunci!</h5>
            </div>
        </div>
        <div class="row justify-content-center ">
            @foreach ($announcements as $announcement)
                <div class="col-12 col-md-4 my-3 d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn btn-primary ">dettagli!</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-primary ">Categoria:{{ $announcement->category->name }}</a>
                            <p class="text-muted">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
