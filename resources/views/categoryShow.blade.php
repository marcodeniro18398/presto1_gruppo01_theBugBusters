<x-layout>
    <div class="container-fluid margin-title">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h2 class="text-uppercase font-primary pt-4 pb-5 subtitle">{{ __('ui.allAnnouncementCategory') }}
                    {{ __('ui.' . $category->name) }}</h2>
            </div>

        </div>
        <div class="row justify-content-center ">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-4 my-5 mx-auto d-flex justify-content-evenly">
                    <x-card :announcement="$announcement"></x-card>
                    {{-- <div class="card rounded-5" style="width: 18rem;">
                        <img src="{{ !$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200' }}"
                            class="rounded-top-5" alt="...">
                        <div class="card-body rounded-bottom-5 bg-grey color-champagnePink">
                            <h5 class="card-title">{{ $announcement->name }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <p class="card-text">{{ $announcement->price }}</p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn btn-custom2">{{__('ui.details')}}</a>
                            <p href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="btn btn-custom2 mb-0">{{__('ui.category')}} {{ __('ui.'.$announcement->category->name) }}</p>
                            <p class="card-text pt-3 fst-italic">{{__('ui.publication')}} {{ $announcement->created_at->format('d/m/Y') }} {{__('ui.from')}}
                                {{ $announcement->user->name ?? '' }}</p>
                        </div>
                    </div> --}}
                </div>
            @empty
                <div class="col-12 col-md-8 vh-50 pt-5">
                    <p class="pt-5">{{ __('ui.NothingAnnouncements') }}</p>
                    <p>{{ __('ui.publicated') }} <a class="mx-2 btn btn-custom1 color-grey"
                            href="{{ route('announcements.create') }}">{{ __('ui.newAnnouncement') }}</a></p>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
