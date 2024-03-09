<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1>Presto.it</h1>
                <h5>Tutte le categorie!</h5>
            </div>
        </div>
        <div class="row justify-content-center ">
            @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-3 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn btn-primary ">dettagli!</a>
                            <p href="{{ route('categoryShow', ['category'=>$announcement->category]) }}" class="btn btn-primary ">Categoria:{{ $announcement->category->name }}</p>
                            <p class="text-muted">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} da:
                                {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-12 col-md-8">
                <p class="">Non sono presenti annunci per questa categoria!</p>
                <p>Pubblicane uno: <a href="{{ route('announcements.create') }}">Nuovo annuncio</a></p>
            </div>
            @endforelse
        </div>
    </div>

</x-layout>
