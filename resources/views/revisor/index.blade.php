<x-layout>
    <div class="container-fluid margin-title">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1>{{ $announcement_to_check ? __('ui.announcementRevisioned') : __('ui.nothingAnnouncementRevisioned') }}
                </h1>

            </div>
        </div>
        <div class="row w-100 justify-content-center">
            @if ($announcement_to_check)
                <div class="  col-12 col-md-12 my-3 d-flex justify-content-evenly">
                    <div class="card">
                        @if ($announcement_to_check->images)
                            @foreach ($announcement_to_check->images as $image)
                                <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded" alt="">
                                <div class=" col-md-12 border-end">
                                    <h5 class="tc-accent mt-3">
                                        Tags:
                                    </h5>
                                    <div>
                                        @if($image->labels)
                                            @foreach ($image->labels as $label)
                                                <p class="d-inline">{{ $label }},</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body">
                                        <h5 class="tc-accent mt-3">
                                            Revisione immagini:
                                        </h5>
                                        <p>Adulti: <span class="{{ $image->adult }}"> </span></p>
                                        <p>Satira: <span class="{{ $image->spoof }}"> </span></p>
                                        <p>Medicina: <span class="{{ $image->medical }}"> </span></p>
                                        <p>Violenza: <span class="{{ $image->violence }}"> </span></p>
                                        <p>Contenuto ammiccante: <span class="{{ $image->racy }}"> </span></p>
                                    </div>
                                </div>
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
                            <button type="submit" class="btn btn-success shadow">{{ __('ui.accept') }}</button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">{{ __('ui.refuse') }}</button>
                        </form>
                    </div>
                </div>
            @elseif ($announcement_to_undo)
                <div class="vh-50 d-flex justify-content-center align-items-end">
                    <form action="{{ route('revisor.undo', ['announcement' => $announcement_to_undo]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">{{ __('ui.reset') }}</button>
                    </form>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                {{-- {{ $announcements->links() }} --}}
            </div>
        </div>
    </div>

</x-layout>
