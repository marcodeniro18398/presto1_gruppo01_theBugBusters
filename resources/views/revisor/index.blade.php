<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1>{{ $announcement_to_check ? __('ui.announcementRevisioned') : __('ui.nothingAnnouncementRevisioned') }}
                </h1>

            </div>
        </div>
        <div class="row justify-content-center">
            @if ($announcement_to_check)
                <div class="col-12 col-md-4 my-3 mx-auto d-flex justify-content-evenly">
                    <div class="card" style="width: 18rem;">
                        @if ($announcement_to_check->images)
                            @foreach ($announcement_to_check->images as $image)
                                <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded" alt="">
                            @endforeach
                        @else
                            <img src="https://picsum.photos/300" class="img-fluid p-3 rounded" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement_to_check->name }}</h5>
                            <p class="card-text">{{ $announcement_to_check->description }}</p>
                            <p class="card-text">{{ $announcement_to_check->created_at->format('d/m/Y') }}</p>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">{{__('ui.accept')}}</button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">{{__('ui.refuse')}}</button>
                        </form>
                    </div>
                </div>
            @elseif ($announcement_to_undo)
            <div class="vh-50">
                <form action="{{ route('revisor.undo', ['announcement' => $announcement_to_undo]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">{{__('ui.reset')}}</button>
                </form>
            </div>
            @endif
            <div class="d-flex justify-content-center">
                {{-- {{ $announcements->links() }} --}}
            </div>
        </div>
    </div>

</x-layout>


