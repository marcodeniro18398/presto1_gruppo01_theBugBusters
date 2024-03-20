<x-layout>
    <div class="container-fluid margin-title">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h2 class=" text-uppercase font-primary pt-4 pb-5 subtitle">{{__('ui.allAnnouncements')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-4 my-5 mx-auto d-flex justify-content-evenly">
                    {{-- <div class="card rounded-5" style="width: 18rem;">
                        <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200'}}" class="rounded-top-5" alt="...">
                        <div class="card-body rounded-bottom-5 bg-grey color-champagnePink">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn btn-primary ">{{__('ui.details')}}</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-primary ">{{__('ui.category')}} {{ __('ui.'.$announcement->category->name) }}</a>
                            <p class="card-text pt-3 fst-italic">{{__('ui.publication')}} {{ $announcement->created_at->format('d/m/Y') }} da: {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div> --}}
                    <x-card :announcement="$announcement"></x-card>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        <p class="lead">{{__('ui.NothingAnnouncements')}}</p>
                    </div>
                </div>
            @endforelse
            <div class="d-flex justify-content-center">
                {{ $announcements->links() }}
            </div>
        </div>
    </div>

</x-layout>
